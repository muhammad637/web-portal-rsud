<?php

namespace App\Http\Controllers;

use App\Models\KategoriKonten;
use Illuminate\Http\Request;

class KategoriKontenController extends Controller
{
    public function kategori(KategoriKonten $kategoriKonten)
    {
        $artikel_kategori = $kategoriKonten->beritadanartikel->paginate(5)->get();
        return view('pages.berita-artikel.artikel-kategori', [
            'kategoriArtikel' => $kategoriKonten,
            'artikel' => $artikel_kategori,
            'kategori' => KategoriKonten::all(),
        ]);
    }

    public function index()
    {
        $kategoriKonten = KategoriKonten::orderBy('updated_at', 'desc')->get();
        return view('admin.master-kategori.konten.index', [
            'kategori' => $kategoriKonten
        ]);
    }

    public function create()
    {
        return view('admin.master-kategori.konten.create');
    }
    public function edit(KategoriKonten $kategoriKonten)
    {
        return view('admin.master-kategori.konten.edit', [
            'kategoriKonten' => $kategoriKonten
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'slug' => 'required||unique:kategori_kontens,slug'
            ]
        );
        KategoriKonten::create($validatedData);
        return redirect(route('kategori-konten.index'))->with('success', 'kategori-konten berhasil ditambahkan');
    }

    public function update(Request $request, KategoriKonten $kategoriKonten)
    {

        // dd($kategoriKonten);
        // return $request;
        $validatedData = $request->validate([
            'nama' => 'required',
            'slug' => 'required|unique:kategoris,slug,' . $kategoriKonten->id,
            // tambahkan aturan validasi lainnya jika diperlukan
        ]);
        $kategoriKonten->update($validatedData);
        return redirect(route('kategori-konten.index'))->with('success', 'kategori-konten berhasil diupadate');
    }


    public function show(KategoriKonten $kategoriKonten)
    {
        return KategoriKonten::with('beritadanartikel')->where('nama_kategori', $kategoriKonten->nama_kategori)->get();
    }

    public function destroy(KategoriKonten $kategoriKonten)
    {
        $kategoriKonten->delete();
        return redirect()->back()->with('kategori konten berhasil di hapus');
    }
}
