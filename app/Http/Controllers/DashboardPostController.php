<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{

    $countries = $this->getCountries();
    return view('admin.posts.create', compact('countries'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:5000',
            'body' => 'required',
            'selected_country' => 'required', // Tambahkan validasi untuk pemilihan dari data JSON
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        // Ambil data negara dari JSON
        $countries = $this->getCountries();
        
        // Ambil data negara yang dipilih dari formulir
        $selectedCountryCode = $request->input('selected_country');
        
        // Setel nilai 'country_code' berdasarkan pilihan dari formulir
        $validatedData['country_code'] = $selectedCountryCode;

        // Atur nilai 'category_id' ke null jika tidak ada yang dipilih
        $validatedData['category_id'] = $request->input('category_id', null);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['author'] = 'Admin';

        $post = Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New news has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('content.news.isi', [
            "title" => "Isi Berita",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5000',
            'body' => 'required',
        ];
    
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
    
        $validatedData = $request->validate($rules);
    
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
    
        $validatedData['category_id'] = $request->input('category_id', null);
    
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['author'] = 'Admin';
    
        $post->update($validatedData);
    
        return redirect('/dashboard/posts')->with('success', 'News has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'News has been deleted!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    private function getCountries()
    {
        $path = public_path('json/countries.json');
        return json_decode(file_get_contents($path), true);
    }
}