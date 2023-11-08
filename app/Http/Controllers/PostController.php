<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index($category = null)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(8);

        return view('berita', [
            "title" => "Berita",
            "posts" => $posts,
        ]);
    }

    public function show(Post $post)
    {
        $latestPosts = Post::orderBy('created_at', 'desc')->take(4)->get();

        return view('isi-berita.isi-berita', [
            "title" => "Isi Berita",
            "post" => $post,
            "latestPosts" => $latestPosts,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'LIKE', "%$query%")
                     ->orWhere('body', 'LIKE', "%$query%")
                     ->paginate(8);
    
        return view('konten.berita.berita', [
            "title" => "Hasil Pencarian",
            "posts" => $posts
        ]);
    }

    public function showByBidang($nama_bidang)
{
    // Anda dapat menyesuaikan model dan kolom yang digunakan sesuai dengan struktur database Anda
    $posts = Post::where('nama_bidang', $nama_bidang)
                 ->orderBy('created_at', 'desc')
                 ->paginate(8);
                 $name = Name::all(); // Ini adalah definisi variabel $name
                 $address = Address::all();
                 $information = Information::all();

    $latestPosts = Post::orderBy('created_at', 'desc')->take(4)->get();

    return view('berita', [
        "title" => "Berita Bidang $nama_bidang",
        "posts" => $posts,
        "latestPosts" => $latestPosts
    ]);
}
}