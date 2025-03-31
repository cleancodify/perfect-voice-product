<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;

class ClientController extends Controller
{
    public function profileSettingView()
    {
        $client = auth()->user();
        $countries = Country::all();
        // Return the view with the actor's profile data
        return view('dashboard.client-profile-setting', compact('client', 'countries'));
    }

    

    public function updateProfileSettings(Request $request)
    {
        // Get authenticated user
        $user = auth()->user();

        // Validate request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'phone' => 'nullable|string|max:20',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
            'company_name' => 'nullable|string|max:255',
            'company_website' => 'nullable|url|max:255',      
            'country_code' => 'required|string|size:2',
            'billing_address' => 'nullable|string|max:500',  
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:20|regex:/^\d{4,10}$/',    
        ]);

        // If validation fails, return JSON response with errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        $user->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);

        $data = [
            'gender' => 'male',
            'country_code' => $validated['country_code'] ?? 'US',
            'language_code' => 'en',
            'company_name' => $validated['company_name'] ?? null,
            'company_website' => $validated['company_website'] ?? null,
            'billing_address' => $validated['billing_address'] ?? null,
            'address' => $validated['address'] ?? null,
            'city' => $validated['city'] ?? null,
            'state' => $validated['state'] ?? null,
            'zip' => $validated['zip'] ?? null,
        ];

        if ($request->hasFile('profile_photo')) {
            try {
                // Check if the user already has a profile photo
                if (!empty($user->profile->photo_src)) {
                    // Get the previous photo path (from the database)
                    $oldPhotoPath = $user->profile->photo_src; // Assuming you store the photo URL in `photo_src` field
                    $oldPhotoPath = str_replace(env('AWS_URL'), '', $oldPhotoPath); // Strip base URL to get the actual path

                    // Delete the old photo from S3 if it exists
                    if (Storage::disk('s3')->exists($oldPhotoPath)) {
                        Storage::disk('s3')->delete($oldPhotoPath);
                    }
                }
        
                // Upload the new profile photo to S3
                $file = $request->file('profile_photo');
                $photoPath = $file->store('profile_photos', 's3');
        
                if ($photoPath) {
                    // Store the new photo URL in the database
                    $data['photo_src'] = Storage::disk('s3')->url($photoPath);
                } else {
                    return response()->json(['errors' => true, 'message' => 'File upload failed unexpectedly.'], 500);
                }
            } catch (Exception $e) {
                return response()->json([
                    'errors' => true,
                    'message' => 'Upload failed: ' . $e->getMessage()
                ], 500);
            }
        }

        // Update or Create Profile model
        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            $data
        );

        // Sync voice_specials (Many-to-Many Relationship)

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user->load('profile')
        ]);
    }
}
