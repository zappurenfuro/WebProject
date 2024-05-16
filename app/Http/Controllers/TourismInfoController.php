<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismInfo;

class TourismInfoController extends Controller
{
    public function index()
    {
        $tourismInfos = TourismInfo::all();
        return view('pages.informasi', compact('tourismInfos'));
    }
}
