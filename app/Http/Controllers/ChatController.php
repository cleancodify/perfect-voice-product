<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    //
    public function index() {
        $user = auth()->user();
        $contacts = $user->contacts()->orderBy('created_at', 'desc')->get();
        return view('dashboard.chat', compact('contacts'));
    }

    public function addContact($userId, $contactId) {
        // Check if the contact already exists
        $exists = DB::table('contacts')
            ->where([
                ['user_id', '=', $userId],
                ['contact_id', '=', $contactId]
            ])
            ->exists();

        if (!$exists) {
            // Insert both directions (A → B and B → A)
            DB::table('contacts')->insert([
                ['user_id' => $userId, 'contact_id' => $contactId],
                ['user_id' => $contactId, 'contact_id' => $userId]
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function getContacts() {
        $userId = auth()->user()->id();

        $contacts = DB::table('contacts')
            ->where('user_one', $userId)
            ->orWhere('user_two', $userId)
            ->get()
            ->map(function ($contact) use ($userId) {
                return $contact->user_one == $userId ? $contact->user_two : $contact->user_one;
            });

        // return response()->json($contacts);
    }

    public function sendMessage(Request $request) {
        $user = auth()->user();
        $receiverId = $request->receiver_id;
        $message = $request->message;
        $chatId = $request->chat_id;

        if (!$receiverId || !$message) {
            return response()->json(['error' => 'Invalid request'], 400);
        }

        // Store contact relationship
        // $this->addContact($user->id, $receiverId);

        // Store the message
        try {
            Message::create([
                'chat_id' => $chatId,
                'sender_id' => $user->id,
                'receiver_id' => $receiverId,
                'message' => $message,
                'is_read' => false,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => 'Message failed: ' . $e->getMessage()
            ], 500);
        }

        return response()->json(['success' => true]);
    }

    public function uploadFile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'file' => 'required|file|max:10240', // Limit to 10MB
            'chat_id' => 'required',
            'receiver_id' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('shared_files', 's3');

            $fileUrl = Storage::disk('s3')->url($path);

            // Message::create([
            //     'chat_id' => $request->chat_id,
            //     'sender_id' => $user->id,
            //     'receiver_id' => $request->receiver_id,
            //     'file_url' => $fileUrl,
            //     'file_type' => $file->getClientMimeType(),
            // ]);

            return response()->json(['success' => true, 'file_url' => $fileUrl]);
        }

        return response()->json(['success' => false, 'error' => 'File upload failed'], 400);
    }
}
