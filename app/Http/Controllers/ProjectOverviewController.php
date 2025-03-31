<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectOverviewController extends Controller
{
    public function index() {
        $user = auth()->user();

        // $per_page = 10;

        $projects = Project::where('user_id', $user->id)
            ->with(['actor'])
            ->get();
        return view('project.overview', compact('projects'));
    }
}
