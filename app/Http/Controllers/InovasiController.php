<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use App\Models\KategoriKonten;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class InovasiController extends Controller
{
    //
    public function index()
    {
        return view('admin.master-pages.inovasi.index', [
            'inovasi' => Konten::wherehas('kategori_konten', function ($query) {
                $query->where('nama', 'inovasi');
            })->orderBy('updated_at', 'desc')->get(),
        ]);
    }

    public function create()
    {
        //
        return view('admin.master-pages.inovasi.create', [
            "kategoriKonten" => KategoriKonten::where(
                'nama',
                '!=',
                'inovasi'
            )->get()
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
                'gambar' => 'required|max:1024',
                'link_ig' => '',
                'link_yt' => '',
                'author' => 'required'
            ]
        );
        $validatedData['jenis'] = 'artikel';
        //code...
        $validatedData['gambar'] = $request->file('gambar')->store('image-inovasi');
        $inovasi = Konten::create($validatedData);
        $inov = KategoriKonten::firstOrCreate(['nama' => 'Inovasi', 'slug' => 'inovasi']);
        $inovasi->kategori_konten()->sync([...$request->input('kategori'), $inov->id]);
        return redirect(route('admin.inovasi.index'))->with('success', 'inovasi berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konten  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konten $inovasi)
    {
        //
        return $inovasi;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konten  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konten $inovasi)
    {
        
        //
        // return "testing";
        return view('admin.master-pages.inovasi.edit', [
            'inovasi' => $inovasi,
            "kategoriKonten" => KategoriKonten::where(
                'nama',
                '!=',
                'inovasi'
            )->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konten  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konten $inovasi)
    {
        //
        $rule = [
            'judul' => 'required|max:255',
            'slug' => 'required|max:255|unique:kontens,slug,' . $inovasi->id,
            'deskripsi' => 'required',
        ];
        $validatedData = $request->validate($rule);
        $gambar = $inovasi->gambar;
        if ($request->gambar) {
            Storage::delete($inovasi->gambar);
            $gambar = $request->file('gambar')->store('image-inovasi');
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
        $inovasi->update(
            $updatedData
        );

        $inov = KategoriKonten::firstOrCreate(['nama' => 'Inovasi', 'slug' => 'inovasi']);
        $inovasi->kategori_konten()->sync([...$request->input('kategori'), $inov->id]);
        return redirect(route('admin.inovasi.index'))->with('success', 'berhasil update berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konten  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konten $inovasi)
    {
        //
        Storage::delete($inovasi->gambar);
        $inovasi->delete();
        return redirect(route('admin.inovasi.index'))->with('success', 'berhasil hapus berita');
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
