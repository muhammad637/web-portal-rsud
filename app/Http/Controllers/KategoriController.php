<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\BeritaDanArtikel;

class KategoriController extends Controller
{
    //
    public function kategori(Kategori $kategori)
    {
        $artikel_kategori = $kategori->beritadanartikel->paginate(5)->get();
        return view('pages.berita-artikel.artikel-kategori', [
            'kategoriArtikel' => $kategori,
            'artikel' => $artikel_kategori,
            'kategori' => Kategori::all(),
        ]);
    }

    public function index()
    {
        $kategori = Kategori::orderBy('updated_at', 'desc')->get();
        return view('admin.master-kategori.konten', [
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate(
            [
                'nama_kategori' => 'required',
                'slug' => 'required||unique:kategoris,slug'
            ]
        );
        Kategori::create($validatedData);
        return redirect()->back()->with('success', 'kategori-konten berhasil ditambahkan');
    }

    public function update(Request $request, Kategori $kategori)
    {

        // dd($kategori);
        // return $request;
        $validatedData = $request->validate([
            'nama_kategori' => 'required',
            'slug' => 'required|unique:kategoris,slug,' . $kategori->id,
            // tambahkan aturan validasi lainnya jika diperlukan
        ]);
        $kategori->update($validatedData);
        return redirect()->back()->with('success', 'kategori-konten berhasil diupadate');
    }


    public function show(Kategori $kategori)
    {
        return Kategori::with('beritadanartikel')->where('nama_kategori', $kategori->nama_kategori)->get();
    }

    public function destroy(Kategori $kategori)
    {
        Kategori::find($kategori)->delete;
        return back();
        // return $kategori->delete();
    }
}
