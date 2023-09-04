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
    //berita-portal
    public function Beritaindex(){
        return view('pages/berita-artikel/berita', [
            'berita' => BeritaDanArtikel::where('jenis', 'berita')->take(5)->get(),
            // $beritaTerbaru = BeritaDanArtikel::orderBy('tanggal', 'desc')->take(5)->get()
            'BeritaTerbaru' => BeritaDanArtikel::orderBy('updated_at', 'desc')->take(3)->get()
        ]);
    }


    public function IsiBeritaindex(BeritaDanArtikel $beritaDanArtikel){
        return view('pages/berita-artikel/isi-berita', [
            "beritaDanArtikel" => $beritaDanArtikel ]);
    }


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
            'slug' => 'required|unique:berita_dan_artikels,slug,'. $beritaDanArtikel->id,
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


    //artikel-portal
    public function Artikelindex(){
        return view('pages/berita-artikel/artikel', [
            'artikel' => BeritaDanArtikel::where('jenis', 'artikel')->take(5)->get(),
            'kategori' => Kategori::all(),
            // $beritaTerbaru = BeritaDanArtikel::orderBy('tanggal', 'desc')->take(5)->get()
            'ArtikelTerbaru' => BeritaDanArtikel::where('jenis', 'artikel')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get()
        ]);
    }


    // admin-artikel
    public function artikel()
    {
        return view('admin.pages.konten.artikel.index', [
            'artikel' => BeritaDanArtikel::where('jenis', 'artikel')
                ->orderBy('updated_at', 'desc')
                ->get()
        ]);
    }

    public function artikelShow(BeritaDanArtikel $beritaDanArtikel)
    {
        return view('admin.pages.konten.artikel.show', [
            'artikel' => $beritaDanArtikel
        ]);
    }

    public function artikelCreate()
    {
        return view('admin.pages.konten.artikel.create', [
            "kategori" => Kategori::all()
        ]);
    }

    public function artikelStore(Request $request)
    {

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
        $validatedData['jenis'] = 'artikel';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-berita-artikel');
        BeritaDanArtikel::create($validatedData);
        $beritaDanArtikel = BeritaDanArtikel::where('slug', $request->slug)->first();
        $beritaDanArtikel->kategori()->sync($request->input('kategori'));
        return redirect(route('admin.artikel'))->with('success', 'artikel berhasil di tambahkan');
    }
    public function artikelEdit(BeritaDanArtikel $beritaDanArtikel)
    {
        // return $beritaDanArtikel->kategori->pluck('id')->toArray();
        return view('admin.pages.konten.artikel.edit', [
            'artikel' => $beritaDanArtikel,
            'kategori' => Kategori::all()
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
        $updatedData = array_merge(['gambar' => $gambar, 'link' => $request->link], $validatedData);
        $beritaDanArtikel->update(
            $updatedData
        );
        return redirect(route('admin.artikel'))->with('success', 'berhasil update berita');
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
