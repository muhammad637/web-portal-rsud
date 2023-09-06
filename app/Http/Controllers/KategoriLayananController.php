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
        return view('admin.master-kategori.layanan', [
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
    }
}
