<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\ArtworkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.artwork.index', [
            'posts' => Artwork::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artwork.create', [
            'categories' => ArtworkCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:artworks',
            'category_id' => 'required',
            'image' => 'image',
            'caption' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('artwork-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Artwork::create($validatedData);

        return redirect('/dashboard/artwork')->with('success', 'Artwork Berhasil Ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show(Artwork $artwork)
    {
        return view('dashboard.artwork.show', [
            'post' => $artwork
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Artwork $artwork)
    {
        return view('dashboard.artwork.edit', [
            'post' => $artwork,
            'categories' => ArtworkCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artwork $artwork)
    {   
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image',
            'caption' => 'required'
        ];
        
        if($request->slug != $artwork->slug) {
            $rules['slug'] = 'required|unique:artworks';
        }
        
        $validatedData = $request->validate($rules);
        
        if($request->file('image')){
            if($request->oldArtwork){
                Storage::delete($request->oldArtwork);
            }
            $validatedData['image'] = $request->file('image')->store('artwork-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Artwork::where('id', $artwork->id)
            ->update($validatedData);

        return redirect('/dashboard/artwork')->with('success', 'Artwork Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artwork $artwork)
    {
        if($artwork->image){
            Storage::delete($artwork->image);
        }

        Artwork::destroy($artwork->id);

        return redirect('/dashboard/artwork')->with('success', 'Artwork Berhasil Dihapus');
    }

    public function cek(Request $request){
        $slug = SlugService::createSlug(Artwork::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
