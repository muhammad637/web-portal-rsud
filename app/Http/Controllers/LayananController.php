<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KategoriLayanan $kategoriLayanan)
    {
        return Layanan::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(KategoriLayanan $kategoriLayanan)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, KategoriLayanan $kategoriLayanan)
    {
        $validateData = $request->validate(
            [
                'nama_layanan' => 'required',
                'gambar_utama' => 'required',
                'gambar-1' => 'required',
                'gambar-2' => 'required',
                'gambar-3' => 'required'
            ]
            );
            Layanan::create($validateData);
            return Layanan::all();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriLayanan $kategoriLayanan, Layanan $layanan)
    {
        return Layanan::with('nama_layanan')->where('id', $layanan)->get();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriLayanan $kategoriLayanan,Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan, KategoriLayanan $kategoriLayanan)
    {

        $validateData = $request->validate([
            'nama_layanan' => 'required',
            'gambar_utama' => 'required',
            'gambar-1' => 'required',
            'gambar-2' => 'required',
            'gambar-3' => 'required'
        ]);
        $layanan->update($validateData);
        return Layanan::all();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan, KategoriLayanan $kategoriLayanan)
    {
        //
    }
}
