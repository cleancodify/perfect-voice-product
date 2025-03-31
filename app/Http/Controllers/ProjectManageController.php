<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use App\Models\TemporaryAttachment;
use App\Models\AttachmentFile;

class ProjectManageController extends Controller
{
    public function index($projectId) {
        $user = auth()->user();

        $project = Project::where('user_id', $user->id)
            ->where('id', $projectId)
            ->with(['actor.profile', 'attachments'])
            ->first();

        return view('project.manage', compact('project' ,'projectId'));
    }

    public function uploadProjectFile(Request $request)
    {
        $file = $request->file('attachments');
        $user = auth()->user();

        try {
            // Store file temporarily
            $path = $file->store('project_uploads', 's3');
            $fileUrl = Storage::disk('s3')->url($path);

            // Save file details to temporary_attachments
            $attachment = TemporaryAttachment::create([
                'user_id' => $user->id,
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $fileUrl,
                'mime_type' => $file->getClientMimeType(),
                'file_size' => $file->getSize()
            ]);

            return response()->json(['success' => true, 'fileId' => $attachment->id, 'filePath' => $fileUrl]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'File upload failed: ' . $e->getMessage()], 500);
        }
    }

    public function uploadEditProjectFile($projectId, Request $request)
    {
        $file = $request->file('attachments');

        try {
            // Store file temporarily
            $path = $file->store('project_uploads', 's3');
            $fileUrl = Storage::disk('s3')->url($path);

            // Save file details to temporary_attachments
            $attachment = AttachmentFile::create([
                'project_id' => $projectId,
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $fileUrl,
                'mime_type' => $file->getClientMimeType(),
                'file_size' => $file->getSize()
            ]);

            return response()->json(['success' => true, 'fileId' => $attachment->id, 'filePath' => $fileUrl]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'File upload failed: ' . $e->getMessage()], 500);
        }
    }

    public function deleteProjectFile($fileId)
    {
        $attachment = AttachmentFile::find($fileId);

        if (!$attachment) {
            return response()->json(['message' => 'Attachment not found'], 404);
        }

        // Delete the file from storage
        if (Storage::disk('s3')->exists($attachment->file_path)) {
            Storage::disk('s3')->delete($attachment->file_path);
        }

        // Remove the record from the database
        $attachment->delete();

        return response()->json(['message' => 'Attachment deleted successfully']);
    }

    public function deleteTempProjectFile($fileId)
    {
        $attachment = TemporaryAttachment::find($fileId);

        if (!$attachment) {
            return response()->json(['message' => 'Attachment not found'], 404);
        }

        // Delete the file from storage
        if (Storage::disk('s3')->exists($attachment->file_path)) {
            Storage::disk('s3')->delete($attachment->file_path);
        }

        // Remove the record from the database
        $attachment->delete();

        return response()->json(['message' => 'Attachment deleted successfully']);
    }
}

