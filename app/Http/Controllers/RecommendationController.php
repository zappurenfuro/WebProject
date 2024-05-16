<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
use App\Models\Recommendation;

class RecommendationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $preferences = $user->preferences()->pluck('category')->toArray();

        // Fetch recommendations based on user preferences
        $recommendations = Recommendation::whereIn('category', $preferences)->get();

        return view('pages.rekomendasi', compact('recommendations'));
    }
}
