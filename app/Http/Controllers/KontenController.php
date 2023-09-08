<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use App\Models\BeritaDanArtikel;
use App\Http\Controllers\Controller;
use App\Models\KategoriKonten;
use Cviebrock\EloquentSluggable\Services\SlugService;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konten = Konten::all();
        return view('admin.master-pages.konten.index',[
            'konten' => $konten
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.master-pages.konten.create', [
            "kategoriKonten" => KategoriKonten::all()
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
        //
        // return $request->all();
        $validatedData = $request->validate(
            [
                'judul' => 'required',
                'slug' => 'required|unique:berita_dan_artikels,slug',
                'deskripsi' => 'required',
                'gambar' => 'required|',
                'link_ig' => '',
                'link_yt' => '',
            ]
        );
        $validatedData['jenis'] = 'artikel';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-konten');
        $konten = Konten::create($validatedData);
        $konten->kategori_konten()->sync($request->input('kategori'));
        return redirect(route('konten.index'))->with('success', 'konten berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show(Konten $konten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit(Konten $konten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konten $konten)
    {
        //
    }

    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Konten::class, 'slug', $request->judul);
        return response()->json([
            "slug" => $slug
        ]);
        return "testing";
    }
}
