<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class SpesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Spesialis::all();
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

        $validatedData = $request->validate(
            [
                'nama_spesialis' => 'required|unique:spesialis',
                'gambar' => 'gambar'
            ]
        );

        Spesialis::create($validatedData);
        return Spesialis::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function show(Spesialis $spesialis)
    {
        return Spesialis::with('nama_spesialis')->where('id', $spesialis)->get();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function edit(Spesialis $spesialis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spesialis $spesialis)
    {
        // return $request;
        $validatedData = $request->validate(
            [
                'nama_spesialis' => 'required'. Rule::unique('spesialis')->ignore($spesialis->id),
            ]
        );
        // return $validatedData;
        $spesialis->update($validatedData);
        return $spesialis;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spesialis $spesialis)
    {
        //
    }
}
