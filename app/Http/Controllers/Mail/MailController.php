<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactusMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactUs(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'role' => ['role'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $email_address = 'talentedexpert0057@gmail.com';

        try {
            Mail::to($email_address)->send(new ContactusMail($request->all()));
            return redirect()->back()->with('success', 'Your message has been sent successfully.');
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Your message has been failed to send!');
        }
    }
}
