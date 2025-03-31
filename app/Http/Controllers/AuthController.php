<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Language;
use App\Models\Country;

class AuthController extends Controller
{
    public function loginView(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        if (\Auth::attempt(array('email' => $validated['email'], 'password' => $validated['password']))) {
            $redirectUrl = route('dashboard');

            if ($request->has('redirect')) {
                $redirectUrl = $request->query('redirect');
            }

            return redirect($redirectUrl);

            // return redirect()->route('dashboard');
        } else {
            $validator->errors()->add(
                'password', 'The password does not match with username'
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function registerView(){
        $languages = Language::all();
        $countries = Country::all();

        return view('auth.register', compact('languages', 'countries'));
    }

    public function forgotView(){
        return view('auth.forgot');
    }

    public function forgot(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $success = true;
        return view('auth.forgot', compact('success'));
    }

    public function registerActor(){
        $languages = Language::all();
        $countries = Country::all();

        return view('auth.register-actor', compact('languages', 'countries'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(7)],
            'role' => ['required', 'in:client,voice_actor'], // Restrict role values            
            'company_name' => 'nullable|string|max:255',
            'company_website' => 'nullable|url|max:255',
            'address' => 'nullable|string|max:500',
            'billing_address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:20|regex:/^\d{4,10}$/',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $user = User::create([
            'first_name' => $validated["first_name"],
            'last_name' => $validated["last_name"],
            'phone' => $validated["phone"] ?? null, // Nullable field
            'email' => $validated["email"],
            'password' => Hash::make($validated["password"]),
            'role' => $validated["role"],
        ]);

        $user->profile()->create([
            'country_code' => $request['country_code'] ?? 'US',
            'gender' => $request["gender"] ?? 'male', // Use the gender from the request
            'language_code' => $request['language_code'] ?? 'en', // Default language code
            'company_name' => $request['company_name'] ?? '',
            'company_website' => $request['company_website'] ?? '',
            'billing_address' => $request['billing_address'] ?? '',
            'address' => $request['address'] ?? '',
            'state' => $request['state'],
            'city' => $request['city'],
            'zip' => $request['zip'],
            'deadline' => '4'
        ]);

        auth()->login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('landing');
    }
}
