<?php

namespace App\Http\Controllers;

use App\Models\User;

class PagesController extends Controller
{
    public function landing()
    {
        $featured_actors = User::where('role', 'voice_actor')
            ->with(['profile'])
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
            ->select([
                'users.*',
                'average_score as profiles.average_score',
                'featured as profiles.featured'
            ])
            ->orderBy('featured', 'desc')
            ->orderBy('average_score', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('landing', compact('featured_actors'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function howWorks() {
        return view('how-works');
    }

    public function services() {
        return view('services');
    }

    public function faq () {
        return view('faq');
    }
}
