<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontakDarurat;
use App\Models\JamOperasional;
use App\Http\Controllers\Controller;

class JamOperasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.informasi.jam-operasional.index', [
            'jam_operasional' => JamOperasional::orderBy('created_at','asc')->get(),
            'kontakDarurat' => KontakDarurat::first()
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
        return 'testing';
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
        $jamOperasional = JamOperasional::create($request->all());
        return redirect()->back()->with('succes', 'jam operasional berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JamOperasional  $jamOperasional
     * @return \Illuminate\Http\Response
     */
    public function show(JamOperasional $jamOperasional)
    {
        //
        return 'testing';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JamOperasional  $jamOperasional
     * @return \Illuminate\Http\Response
     */
    public function edit(JamOperasional $jamOperasional)
    {
        //
        return 'testing';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JamOperasional  $jamOperasional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JamOperasional $jamOperasional)
    {
        //
        $jamOperasional->update($request->all());
        return redirect()->back()->with('success', 'jam operasioanl berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JamOperasional  $jamOperasional
     * @return \Illuminate\Http\Response
     */
    public function destroy(JamOperasional $jamOperasional)
    {
        //
        $jamOperasional->delete();
        return redirect()->back()->with('succes', 'jam operasional berhasil dihapus');
    }

    public function kontakDarurat(Request $request){
        $kontak = KontakDarurat::first()->update([
            'kontak_darurat' => $request->input('kontak_darurat')
        ]
        );
        return redirect()->back();
    }
}
