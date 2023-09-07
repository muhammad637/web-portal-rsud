<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\KategoriLayanan;
use App\Http\Controllers\Controller;

class KategoriLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriLayanan = KategoriLayanan::orderBy('updated_at', 'desc')->get();
        return view('admin.master-kategori.layanan.index', [
            'kategoriLayanan' => $kategoriLayanan
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
        return view('admin.master-kategori.layanan.create');
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
        $validatedData = $request->validate([
            "nama" => "required",
            "slug" => "required|unique:kategori_layanans,slug"
        ]);

        KategoriLayanan::create($validatedData);
        return redirect(route('kategori-layanan.index'))->with('success', "kategori layanan berhasil dibuat");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriLayanan  $kategoriLayanan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriLayanan $kategoriLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriLayanan  $kategoriLayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriLayanan $kategoriLayanan)
    {
        //
        return view('admin.master-kategori.layanan.edit', [
            "kategoriLayanan" => $kategoriLayanan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriLayanan  $kategoriLayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriLayanan $kategoriLayanan)
    {
        //
        $validatedData = $request->validate([
            "nama" => "required",
            "slug" => "required|unique:kategori_layanans,slug," . $kategoriLayanan->id
        ]);

        $kategoriLayanan->update($validatedData);
        return redirect()->back()->with('success', "kategori layanan berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriLayanan  $kategoriLayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriLayanan $kategoriLayanan)
    {
        //
        $kategoriLayanan->delete();
        return redirect()->back()->with('success', 'data berhasil dihapus');
    }
}
