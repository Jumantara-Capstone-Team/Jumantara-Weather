<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index($category = null)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(8);

        return view('content.news.berita', [
            "title" => "Berita",
            "posts" => $posts,
        ]);
    }

    public function show(Post $post)
    {
        $latestPosts = Post::orderBy('created_at', 'desc')->take(4)->get();

        return view('content.news.isi', [
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
    
    public function showNotifications()
    {
        // Mendapatkan notifikasi dari database
        $notifications = DB::table('posts')->latest()->get();

        return view('components.admin.auth.activity', [
            'notifications' => $notifications,
        ]);
    }
    
}