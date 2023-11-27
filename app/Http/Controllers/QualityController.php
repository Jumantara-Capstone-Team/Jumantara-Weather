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
}
