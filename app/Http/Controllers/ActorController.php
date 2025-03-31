<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Country;
use App\Models\VoiceSpecial;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ActorController extends Controller
{
    public function index()
    {
        $per_page = 10;

        $all_actors = User::where('role', 'voice_actor')
            ->with(['profile.language', 'voiceSpecials'])
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
            ->select([
                'users.*',
                'average_score as profiles.average_score'                // Include all user fields
            ])
            ->orderBy('average_score', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate($per_page);

        $actors = json_encode($all_actors->items());

        $actor_count = $all_actors->total();
        $total_page = ceil($actor_count / (float)$per_page);

        $voice_specials = VoiceSpecial::get();
        $voice_specials = json_encode($voice_specials);

        $language = Language::get();
        $language = json_encode($language);

        $product_types = [
            'audio_src_corporate'   => 'Corporate',
            'audio_src_explainer'   => 'Explainer',
            'audio_src_elearning'   => 'E-learning',
            'audio_src_guide' => 'Audio guide',
            'audio_src_telephony'   => 'Telephony',
            'audio_src_commercial'  => 'Commercial',
            'audio_src_characters'  => 'Characters',
        ];
        $product_types = json_encode($product_types);

        return view(
            'actor.list',
            compact('actors', 'total_page', 'voice_specials', 'product_types', 'language', 'per_page')
        );
    }

    public function listByQuery(Request $request)
    {
        $query = User::where('role', 'voice_actor')
            ->with(['profile.language', 'voiceSpecials'])
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id') // Join profile table
            ->select([
                'users.*',
                'average_score as profiles.average_score', // Include average_score in selection
            ]);
        // Apply filters based on the request
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = '%' . $request->search . '%';
            $query->where(function($query) use ($searchTerm) {
                $query->where('first_name', 'LIKE', $searchTerm)
                    ->orWhere('last_name', 'LIKE', $searchTerm)
                    ->orWhere('phone', 'LIKE', $searchTerm)
                    ->orWhere('email', 'LIKE', $searchTerm);
            });
        }

        if ($request->has('gender') && !empty($request->gender)) {
            $query->whereHas('profile', function($q) use ($request) {
                $q->where('gender', $request->gender);
            });
        }

        if ($request->has('language') && !empty($request->language)) {
            $query->whereHas('profile.language', function ($q) use ($request) {
                $q->where('languages.code', $request->language);
            });
        }

        if ($request->filled('voice_type')) {
            $query->whereHas('voiceSpecials', fn($q) => $q->where('voice_specials.id', $request->voice_type));
        }

        if ($request->has('product_type') && !empty($request->product_type)) {
            $productType = $request->product_type;
            $query->whereHas('profile', function ($q) use ($productType) {
                $q->whereNotNull($productType);
            });
        }

        $query->orderByDesc('average_score')->orderByDesc('created_at');

        $totalCount = $query->count();

        if ($request->has('start') && $request->has('end')) {
            $query->skip($request->start)->take($request->end - $request->start);
        }

        return response()->json([
            'total_count' => $totalCount,
            'data' => $query->get()
        ]);
    }


    public function show($id)
    {
        // Fetch the actor's profile with user details
        $actor = User::with('profile')->find($id);

        // Return the view with the actor's profile data
        return view('actor.profile', compact('actor'));
    }

    // profile settings
    public function profileSettingView()
    {
        $languages = Language::all();
        $countries = Country::all();
        $voice_specials = VoiceSpecial::all();

        $actor = auth()->user()->load('voiceSpecials');
        // Return the view with the actor's profile data
        return view('dashboard.actor-profile-setting', compact('actor', 'languages', 'countries', 'voice_specials'));
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
            'deadline' => 'required|integer',
            'voice_specials' => 'required|array|min:3', // Ensure at least 3 voice_specials
            'voice_specials.*' => 'exists:voice_specials,id', // Validate IDs exist in `voice_specials` table
            'bio' => 'nullable|string|max:1000',
            'gender' => 'required|in:male,female',
            'country_code' => 'required|string|size:2',
            'language_code' => 'required|string|size:2',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:20|regex:/^\d{4,10}$/',
            'price' => 'required|numeric|min:0|max:9999.99',
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
            'bio' => $validated['bio'] ?? null,
            'gender' => $validated['gender'],
            'country_code' => $validated['country_code'],
            'language_code' => $validated['language_code'],
            'deadline'=> $validated['deadline'] ?? '4',
            'address' => $validated['address'] ?? null,
            'city' => $validated['city'] ?? null,
            'state' => $validated['state'] ?? null,
            'zip' => $validated['zip'] ?? null,
            'price' => $validated['price'] ?? 0,
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
        $user->voiceSpecials()->sync($validated['voice_specials']);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user->load('profile', 'voiceSpecials')
        ]);
    }


    // profile settings
    public function portfolioSettingsView()
    {
        $actor = auth()->user()->load('voiceSpecials');
        // Return the view with the actor's profile data
        return view('dashboard.actor-portfolio-setting', compact('actor'));
    }


    public function updatePortfolioSettings(Request $request)
    {
        // Get authenticated user
        $user = auth()->user();

        // Validate request data
        // $validator = Validator::make($request->all(), [
        //     'deadline' => 'required|integer'
        // ]);

        // If validation fails, return JSON response with errors
        // if ($validator->fails()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Validation failed',
        //         'errors' => $validator->errors(),
        //     ], 422); // 422 Unprocessable Entity
        // }

        // $validated = $validator->validated();

        // Update or Create Profile model
        // $user->profile()->updateOrCreate(
        //     ['user_id' => $user->id],
        //     [
        //         'deadline' => $validated['deadline'],
        //     ]
        // );

        $user->profile()->updateOrCreate(
            ['user_id' => $user->id]
        );

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user->load('profile', 'voiceSpecials')
        ]);
    }

    /**
     * Handle the file upload for voice types.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadVoice(Request $request)
    {
        $files = $request->allFiles();
        if (empty($files)) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $fieldname = array_keys($request->allFiles())[0];
        $file = $request->file($fieldname);

        $user = auth()->user();

        try {
            // Validate file size (max 10MB) and format (MP3)
            if ($file->getSize() > 10 * 1024 * 1024) {
                return response()->json(['error' => "The file for $type exceeds the maximum size of 10MB."], 400);
            }

            if ($file->getClientOriginalExtension() !== 'mp3') {
                return response()->json(['error' => "The file for $type must be in MP3 format."], 400);
            }

            // Store the file in the public disk and generate its URL
            $path = $file->store('profile_voices', 's3');
            $fileUrl = Storage::disk('s3')->url($path);

            // Update the user's profile
            $user->profile()->update([
                $fieldname => $fileUrl
            ]);

            return response()->json(['success' => true, 'filePath' => $fileUrl]);
        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'File upload failed: ' . $e->getMessage()
            ], 500);
        }

        return response()->json(['error' => 'No files uploaded'], 400);
    }

    public function deleteVoice(Request $request)
    {
        $voiceType = $request->input('voice_type');
        $user = auth()->user();

        if (!$voiceType || !isset($user->profile[$voiceType])) {
            return response()->json(['error' => 'Invalid voice type'], 400);
        }

        $filePath = $user->profile[$voiceType];
        $filePath = str_replace(env('AWS_URL'), '', $filePath);

        // Delete file from storage
        if (Storage::disk('s3')->exists($filePath)) {
            Storage::disk('s3')->delete($filePath);
        }

        // Remove reference from database (assuming you have a profile model)
        $user->profile()->update([$voiceType => null]);

        return response()->json(['success' => true, 'message' => 'File deleted successfully']);
    }

}
