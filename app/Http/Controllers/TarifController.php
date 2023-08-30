<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.informasi.tarif.index', [
            'tarifTindakan' => Tarif::where('type', 'tindakan')->get(),
            'tarifKamar' => Tarif::where('type', 'kamar')->get(),
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

    public function TarifTindakan(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'tarif' => 'required',
                // 'type' => 'required',
            ]
        );
        Tarif::create(array_merge(['type' => 'tindakan'], $validateData));

        // Tarif::create($validateData);
        return redirect()->back()->with('successTindakan', 'data berhasil diupdate');
        //
    }
    public function tarifKamar(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'tarif' => 'required',
                // 'type' => 'required',
            ]
        );
        $tarif = array_merge(['type' => 'kamar'], $validateData);
        Tarif::create($tarif);
        return redirect()->back()->with('successKamar', 'data berhasil diupdate');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function show(Tarif $tarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarif $tarif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarif $tarif)
    {
        //
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'tarif' => 'required'
            ]
        );
        $tarif->update($validateData);
        if ($tarif->type == 'kamar') {
            return  redirect()->back()->with('successKamar', 'tarif Kamar berhasil di update');
        } else {
            return  redirect()->back()->with('successTindakan', 'tarif Tindakan berhasil di update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarif $tarif)
    {
        //
        if ($tarif->type == 'kamar') {
            $tarif->delete();
            return  redirect()->back()->with('successKamar', 'tarif Kamar berhasil di hapus');
        } else {
            $tarif->delete();
            return  redirect()->back()->with('successTindakan', 'tarif Tindakan berhasil di hapus');
        }
    }
}
