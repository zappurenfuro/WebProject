<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function showForum()
    {
        $tourismInfos = DB::table('tourism_infos')->get();
        return view('forum', ['tourismInfos' => $tourismInfos]);
    }
}

