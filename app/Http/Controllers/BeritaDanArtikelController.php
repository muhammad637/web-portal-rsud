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
        return view('admin.pages.konten.berita.index', [
            'berita' => BeritaDanArtikel::where('jenis', 'berita')
                ->orderBy('updated_at', 'desc')
                ->get()
        ]);
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
        // dd($request->all);

        //code...
        $validatedData = $request->validate(
            [
                'judul' => 'required',
                'slug' => 'required|unique:berita_dan_artikels,slug',
                'isi' => 'required',
                'video' => '',
                'gambar' => 'required|',
                'jenis' => '',
                'link' => '',
            ]
        );
        $validatedData['jenis'] = 'berita';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-berita-artikel');
        BeritaDanArtikel::create($validatedData);
        return BeritaDanArtikel::all();
    }
    public function beritaEdit(BeritaDanArtikel $beritaDanArtikel)
    {
        return view('admin.pages.konten.berita.edit', [
            'berita' => $beritaDanArtikel
        ]);
    }
    public function beritaUpdate(Request $request, BeritaDanArtikel $beritaDanArtikel)
    {
        $rule = [
            'judul' => 'required',
            'slug' => 'required|unique:berita_dan_artikels,slug,' . $beritaDanArtikel->id,
            'isi' => 'required',
        ];

        $validatedData = $request->validate($rule);
        $gambar = $beritaDanArtikel->gambar;
        if ($request->gambar) {
            Storage::delete($beritaDanArtikel->gambar);
            $gambar = $request->file('gambar')->store('image-berita-artikel', 'public');
        }
        $updatedData = array_merge(['gambar' => $gambar], $validatedData);
        $beritaDanArtikel->update(
            $updatedData
        );
        return redirect(route('admin.berita'))->with('success', 'berhasil update berita');
    }

    // admin-artikel
    public function artikel()
    {
        return view('admin.pages.konten.berita.index', [
            'berita' => BeritaDanArtikel::where('jenis', 'berita')
            ->orderBy('updated_at', 'desc')
            ->get()
        ]);
    }

    public function artikelShow(BeritaDanArtikel $beritaDanArtikel)
    {
        return view('admin.pages.konten.berita.show', [
            'berita' => $beritaDanArtikel
        ]);
    }

    public function artikelCreate()
    {
        return view('admin.pages.konten.berita.create', [
            "kategori" => Kategori::all()
        ]);
    }

    public function artikelStore(Request $request)
    {
        // dd($request->all);

        //code...
        $validatedData = $request->validate(
            [
                'judul' => 'required',
                'slug' => 'required|unique:berita_dan_artikels,slug',
                'isi' => 'required',
                'video' => '',
                'gambar' => 'required|',
                'jenis' => '',
                'link' => '',
            ]
        );
        $validatedData['jenis'] = 'berita';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-berita-artikel');
        BeritaDanArtikel::create($validatedData);
        return BeritaDanArtikel::all();
    }
    public function artikelEdit(BeritaDanArtikel $beritaDanArtikel)
    {
        return view('admin.pages.konten.berita.edit', [
            'berita' => $beritaDanArtikel
        ]);
    }
    public function artikelUpdate(Request $request, BeritaDanArtikel $beritaDanArtikel)
    {
        $rule = [
            'judul' => 'required',
            'slug' => 'required|unique:berita_dan_artikels,slug,' . $beritaDanArtikel->id,
            'isi' => 'required',
        ];

        $validatedData = $request->validate($rule);
        $gambar = $beritaDanArtikel->gambar;
        if ($request->gambar) {
            Storage::delete($beritaDanArtikel->gambar);
            $gambar = $request->file('gambar')->store('image-berita-artikel', 'public');
        }
        $updatedData = array_merge(['gambar' => $gambar], $validatedData);
        $beritaDanArtikel->update(
            $updatedData
        );
        return redirect(route('admin.berita'))->with('success', 'berhasil update berita');
    }



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
