<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quality;
use Illuminate\Support\Facades\DB;

class QualityController extends Controller
{
    public function index()
    {
        $quality = Quality::orderBy('created_at', 'desc')->paginate(5);

        return view('content.quality.quality', [
            "title" => "Air Quality",
            "quality" => $quality,
        ]);
    }

    public function show(Quality $quality)
    {
        $latestPosts = Quality::orderBy('created_at', 'desc')->take(4)->get();

        return view('content.quality.detail-quality', [
            "title" => "Isi Quality",
            "quality" => $quality,
            "latestPosts" => $latestPosts,
        ]);
    }

}