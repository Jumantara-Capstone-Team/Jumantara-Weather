<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardQualityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.quality.index', [
            'quality' => Quality::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = $this->getCountries();
    return view('admin.quality.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:quality',
            'image' => 'image|file|max:5000',
            'body' => 'required',
            'selected_country' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('air_quality-images');
        }


        $countries = $this->getCountries();
        
        $selectedCountryCode = $request->input('selected_country');
        
        $validatedData['country_code'] = $selectedCountryCode;

        $validatedData['category_id'] = $request->input('category_id', null);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['author'] = 'Admin';

        $quality = Quality::create($validatedData);

        return redirect('/dashboard/quality')->with('success', 'New Quality Quality has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quality $quality)
    {
        return view('content.quality.isi', [
            "title" => "Isi Quality Quality",
            "quality" => $quality
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quality $quality)
    {
        return view('admin.quality.edit', [
            'quality' => $quality
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quality $quality)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:5000',
            'body' => 'required',
        ];
    
        if ($request->slug != $quality->slug) {
            $rules['slug'] = 'required|unique:quality';
        }
    
        $validatedData = $request->validate($rules);
    
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('air_quality-images');
        }

        $validatedData['category_id'] = $request->input('category_id', null);
    
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['author'] = 'Admin';
    
        $quality->update($validatedData);
    
        return redirect('/dashboard/quality')->with('success', 'Quality Quality has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quality $quality)
    {
        if($quality->image) {
            Storage::delete($quality->image);
        }
        Quality::destroy($quality->id);
        return redirect('/dashboard/quality')->with('success', 'Quality Quality has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Quality::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    private function getCountries()
    {
        $path = public_path('json/countries.json');
        return json_decode(file_get_contents($path), true);
    }
}
