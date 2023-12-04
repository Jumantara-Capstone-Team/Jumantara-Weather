<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weather;
use Illuminate\Support\Facades\DB;


class WeatherController extends Controller
{
    public function index()
    {
        $weather = Weather::orderBy('created_at', 'desc')->paginate(5);

        return view('content.weather.weather', [
            "title" => "Weather",
            "weather" => $weather,
        ]);
    }
}
