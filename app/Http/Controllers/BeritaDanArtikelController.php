<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\BeritaDanArtikel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaDanArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return [
            "berita-artikel" => BeritaDanArtikel::with('kategori')->get()
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            // return "coba";
            $validatedData = $request->validate(
                [
                    'judul' => 'required',
                    'slug' => 'required|unique:berita_dan_artikels',
                    'isi' => 'required',
                    'video' => '',
                    'gambar' => 'required|file|max:1024',
                    'jenis' => 'required'
                    ]
                );
                //code...
            $validatedData['gambar'] = $request->file('gambar')->store('image-berita-artikel');; 
            BeritaDanArtikel::create($validatedData);
            $beritaartikel = BeritaDanArtikel::where('judul', $request->judul)->first();
            $beritaartikel->kategori()->sync($request->kategori);
            return BeritaDanArtikel::with('kategori')->get();
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaDanArtikel  $beritaDanArtikel
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return BeritaDanArtikel::with('kategori')->where('slug', $slug)->first();
        //
        // return BeritaDanArtikel::where('id',$beritaDanArtikel->id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaDanArtikel  $beritaDanArtikel
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaDanArtikel $beritaDanArtikel)
    {
        //
        return BeritaDanArtikel::with('kategori')->find($beritaDanArtikel->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeritaDanArtikel  $beritaDanArtikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaDanArtikel $beritaDanArtikel)
    {
        //
        // return BeritaDanArtikel::with('kategori')->find($id);
        $validatedData = $request->validate(
            [
                'judul' => 'required',
                'slug' => 'required|' .Rule::unique('berita_dan_artikels'),
                'isi' => 'required',
                'video' => '',
                'gambar' => '',
                'jenis' => 'required'
            ]
        );
        if ($validatedData['gambar'] == null) {
            # code...
            $validatedData['gambar'] = $beritaDanArtikel->gambar;
        }else{
            $old = \str_replace('','', $beritaDanArtikel->gambar);
            $new = $request->file('gambar')->store('image-berita-artikel');
            Storage::delete($old);
            $validatedData['gambar'] = $new;
        }
        $beritaDanArtikel->update();
        if ($request->kategori) {
            # code...
            $beritaDanArtikel->kategori()->sync($request->kategori);
        }
        return $beritaDanArtikel;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaDanArtikel  $beritaDanArtikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaDanArtikel $beritaDanArtikel)
    {
        //
        $beritaDanArtikel->delete();
        return BeritaDanArtikel::all();
    }
}
