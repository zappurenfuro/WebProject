<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function showChat($location)
    {
        // Fetch messages for the location from the database and join with users table
        $messages = DB::table('messages')
            ->where('location', $location)
            ->join('users', 'messages.user_id', '=', 'users.id')
            ->select('messages.*', 'users.name as user_name')
            ->get();

        return view('chat', ['location' => $location, 'messages' => $messages]);
    }

    public function postMessage(Request $request, $location)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Save the message to the database
        DB::table('messages')->insert([
            'location' => $location,
            'user_id' => auth()->id(),
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('chat', ['location' => $location]);
    }

    public function editMessage($id)
    {
        $message = DB::table('messages')->where('id', $id)->first();

        if ($message->user_id != Auth::id()) {
            return redirect()->route('chat', ['location' => $message->location])->with('error', 'You can only edit your own messages.');
        }

        return view('edit_message', ['message' => $message]);
    }

    public function updateMessage(Request $request, $id)
    {
        $message = DB::table('messages')->where('id', $id)->first();

        if ($message->user_id != Auth::id()) {
            return redirect()->route('chat', ['location' => $message->location])->with('error', 'You can only edit your own messages.');
        }

        DB::table('messages')->where('id', $id)->update(['message' => $request->input('message')]);

        return redirect()->route('chat', ['location' => $message->location])->with('success', 'Message updated successfully.');
    }

    public function deleteMessage($id)
    {
        $message = DB::table('messages')->where('id', $id)->first();

        if ($message->user_id != Auth::id()) {
            return redirect()->route('chat', ['location' => $message->location])->with('error', 'You can only delete your own messages.');
        }

        DB::table('messages')->where('id', $id)->delete();

        return redirect()->route('chat', ['location' => $message->location])->with('success', 'Message deleted successfully.');
    }
}
