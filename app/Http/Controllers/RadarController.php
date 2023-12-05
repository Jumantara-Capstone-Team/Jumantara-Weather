<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Radar;
use Illuminate\Support\Facades\DB;

class RadarController extends Controller
{
    public function index()
    {
        $radar = Radar::orderBy('created_at', 'desc')->paginate(5);

        return view('content.radar.radar', [
            "title" => "Radar",
            "radar" => $radar,
        ]);
    }
}
