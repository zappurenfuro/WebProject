<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}




