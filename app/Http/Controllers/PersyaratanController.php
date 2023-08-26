<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;

class PersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.informasi.persyaratan.index');
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
     * @param  \App\Models\Persyaratan  $persyaratan
     * @return \Illuminate\Http\Response
     */
    public function show(Persyaratan $persyaratan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persyaratan  $persyaratan
     * @return \Illuminate\Http\Response
     */
    public function edit(Persyaratan $persyaratan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persyaratan  $persyaratan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persyaratan $persyaratan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persyaratan  $persyaratan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persyaratan $persyaratan)
    {
        //
    }
}
