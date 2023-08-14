<?php

namespace App\Http\Controllers;

use App\Models\LayananUnggulan;
use Illuminate\Http\Request;

class LayananUnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.pelayanan.layanan-unggulan.index');
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
     * @param  \App\Models\LayananUnggulan  $layananUnggulan
     * @return \Illuminate\Http\Response
     */
    public function show(LayananUnggulan $layananUnggulan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LayananUnggulan  $layananUnggulan
     * @return \Illuminate\Http\Response
     */
    public function edit(LayananUnggulan $layananUnggulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LayananUnggulan  $layananUnggulan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LayananUnggulan $layananUnggulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LayananUnggulan  $layananUnggulan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LayananUnggulan $layananUnggulan)
    {
        //
    }
}
