<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Contact;
use App\Models\Project;
use App\Models\AttachmentFile;
use App\Models\TemporaryAttachment;

class ProjectController extends Controller
{
    public function index($actorId) {
        // Fetch the actor's profile with user details
        $actor = User::with('profile')->find($actorId);

        return view('project.index', compact('actor'));
    }

    public function store($actorId, Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'medium' => 'required|string',
            'amount_words' => 'required|integer',
            'deadline' => 'required|date',
            'instruction' => 'nullable|string',
            'tone_voice' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $validated['actor_id'] = $actorId;
        $validated['user_id'] = $user->id;

        $project = Project::create($validated);

        // Move temporary attachments to attachment_files table
        $temporaryAttachments = TemporaryAttachment::where('user_id', $user->id)->get();

        foreach ($temporaryAttachments as $temp) {
            AttachmentFile::create([
                'project_id' => $project->id,
                'file_name' => $temp->file_name,
                'file_path' => $temp->file_path,
                'mime_type' => $temp->mime_type,
                'file_size' => $temp->file_size,
            ]);

            // Delete from temporary_attachments
            $temp->delete();
        }

        $contact = Contact::where([
            ['project_id', '=', $project->id],
        ])->first();

        if (!$contact) {
            // Insert both directions (A → B and B → A)
            $contact = Contact::create(['user_id' => $user->id, 'contact_id' => $actorId, 'project_id' => $project->id]);
            Contact::create(['user_id' => $actorId, 'contact_id' => $user->id, 'project_id' => $project->id]);
        }

        return redirect()->route('dashboard/chat', compact('contact'));
    }

    public function edit($contactProjectId, Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'medium' => 'required|string',
            'amount_words' => 'required|integer',
            'deadline' => 'required|date',
            'instruction' => 'nullable|string',
            'tone_voice' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        // Find the existing project
        $project = Project::where('id', $contactProjectId)->where('user_id', $user->id)->first();

        if (!$project) {
            return redirect()->back()->with('error', 'Project not found or unauthorized.');
        }

        // Update the project
        $project->update($validated);

        // Move temporary attachments to attachment_files table
        $temporaryAttachments = TemporaryAttachment::where('user_id', $user->id)->get();

        foreach ($temporaryAttachments as $temp) {
            AttachmentFile::create([
                'project_id' => $project->id,
                'file_name' => $temp->file_name,
                'file_path' => $temp->file_path,
                'mime_type' => $temp->mime_type,
                'file_size' => $temp->file_size
            ]);

            // Delete from temporary_attachments
            $temp->delete();
        }

        $contact = Contact::where([
            ['project_id', '=', $project->id],
        ])->first();

        if (!$contact) {
            // Insert both directions (A → B and B → A)
            Contact::create(['user_id' => $user->id, 'contact_id' => $actorId, 'project_id' => $project->id]);
            $contact = Contact::create(['user_id' => $actorId, 'contact_id' => $user->id, 'project_id' => $project->id]);
        }

        return redirect()->route('dashboard/chat');
    }
}
