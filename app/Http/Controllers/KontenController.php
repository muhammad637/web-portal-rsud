<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use App\Models\BeritaDanArtikel;
use App\Http\Controllers\Controller;
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
    }

    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(BeritaDanArtikel::class, 'slug', $request->judul);
        return response()->json([
            "slug" => $slug
        ]);
        return "testing";
    }
}
