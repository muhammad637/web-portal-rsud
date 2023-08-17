<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\BeritaDanArtikel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaDanArtikelController extends Controller
{

    // admin-berita
    public function berita()
    {
        return BeritaDanArtikel::all();
    }

    public function beritaShow(BeritaDanArtikel $beritaDanArtikel)
    {
        return view('admin.pages.konten.berita.show', [
            'berita' => $beritaDanArtikel
        ]);
    }

    public function beritaCreate()
    {
        return view('admin.pages.konten.berita.create', [
            "kategori" => Kategori::all()
        ]);
    }

    public function beritaStore(Request $request)
    {

        //code...
        $validatedData = $request->validate(
            [
                'judul' => 'required',
                'slug' => 'required|unique:berita_dan_artikels,slug',
                'isi' => 'required',
                'video' => '',
                'gambar' => 'required|',
                'jenis' => ''
            ]
        );
        $validatedData['jenis'] = 'berita';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-berita-artikel');
        BeritaDanArtikel::create($validatedData);
        return BeritaDanArtikel::all();
    }


    // admin-artikel




    // createSlug
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(BeritaDanArtikel::class, 'slug', $request->judul);
        return response()->json([
            "slug" => $slug
        ]);
        return "testing";
    }
}
