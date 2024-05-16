<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only('name', 'email'));
        
        // Update preferences
        $user->preferences()->updateOrCreate(
            ['user_id' => $user->id],
            ['category' => $request->category]
        );

        return redirect()->route('settings')->with('success', 'Settings updated successfully.');
    }
}

