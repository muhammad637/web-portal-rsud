<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use App\Models\KategoriKonten;
use App\Models\BeritaDanArtikel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        
        return view('admin.master-pages.konten.index', [
            'konten' => Konten::orderBy('updated_at', 'desc')->get(),
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
                'judul' => 'required|max:255',
                'slug' => 'required|unique:kontens,slug|max:255',
                'deskripsi' => 'required',
                'gambar' => 'required|',
                'link_ig' => '',
                'link_yt' => '',
                'author' => ''
            ]
        );
        $validatedData['jenis'] = 'artikel';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-konten');
        $konten = Konten::create($validatedData);
        $konten->kategori_konten()->sync($request->input('kategori'));
        return redirect(route('admin.konten.index'))->with('success', 'konten berhasil di tambahkan');
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
        // return "testing";
        return view('admin.master-pages.konten.edit', [
            'konten' => $konten,
            'kategoriKonten' => KategoriKonten::all()
        ]);
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
        $rule = [
            'judul' => 'required|max:255',
            'slug' => 'required|max:255|unique:kontens,slug,' . $konten->id,
            'deskripsi' => 'required',
        ];
        $validatedData = $request->validate($rule);
        $gambar = $konten->gambar;
        if ($request->gambar) {
            Storage::delete($konten->gambar);
            $gambar = $request->file('gambar')->store('image-konten');
        }
        $linkYT = '';
        $linkIG = '';
        $author = '';
        if (isset($request->link_yt)) {
            $linkYT = $request->link_yt;
        }
        if (isset($request->link_ig)) {
            $linkIG = $request->link_ig;
        }
        if (isset($request->author)) {
            $author = $request->author;
        }
        $updatedData = array_merge([
            'gambar' => $gambar,
            'link_yt' => $linkYT,
            'link_ig' => $linkIG,
            'author' => $author
        ], $validatedData);
        $konten->update(
            $updatedData
        );

        $konten->kategori_konten()->sync($request->input('kategori'));
        return redirect(route('admin.konten.index'))->with('success', 'berhasil update berita');
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
        Storage::delete($konten->gambar);
        $konten->delete();
        return redirect(route('admin.konten.index'))->with('success', 'berhasil hapus berita');
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
