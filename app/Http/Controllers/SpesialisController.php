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
    public function spesialis()
    {
        //
        return view('admin.pages.dokter.spesialis', [
            'spesialis' => Spesialis::orderBy('updated_at', 'desc')->get()
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
    public function spesialisStore(Request $request)
    {
        //

        $validatedData = $request->validate(
            [
                'nama_spesialis' => 'required|unique:spesialis,nama_spesialis',
            ]
        );

        Spesialis::create($validatedData);
        return redirect()->back()->with('success', 'nama spesialis berhasil ditambahkan');
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
    public function spesialisEdit(Spesialis $spesialis)
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

    public function spesialisUpdate(Request $request, Spesialis $spesialis)
    {
        // return $request;
        $validatedData = $request->validate(
            [
                'nama_spesialis' => 'required|unique:spesialis,nama_spesialis,' . $spesialis->id,
            ]
        );
        $spesialis->update($validatedData);
        return redirect()->back()->with('success','nama spesialis berhasil di update');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function spesialisDelete(Spesialis $spesialis)
    {
        //
        $spesialis->delete();
        return redirect()->back()->with('success', 'nama spesialis berhasil di delete');
    }
}
