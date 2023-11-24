<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;
use App\Models\Post;


class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::all();
        $posts = Post::all();

        return view('main', [
            "posts" => $posts
        ]);
    }
}