<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Redirect;

class PersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function persyaratan()
    {
        return view('admin.pages.informasi.persyaratan.index', [
            'persyaratan' => Persyaratan::orderBy('updated_at', 'desc')->get()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function persyaratanCreate()
    {
        return view('admin.pages.informasi.persyaratan.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function persyaratanStore(Request $request)
    {

        //
        $validatedData = $request->validate(
            [
                'jenis_penjaminan' => 'required|unique:persyaratans,jenis_penjaminan',
                'rawat_inap' => 'required'
            ]
            );

            Persyaratan::create([
                'jenis_penjaminan' => $validatedData['jenis_penjaminan'],
                'rawat_inap' => $validatedData['rawat_inap']
            ]);
            return redirect(route('admin.persyaratan'))->with('succes', 'persyaratan berhasil ditambahkan');
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
    public function persyaratanEdit(Persyaratan $persyaratan)
    {
        return view('admin.pages.informasi.persyaratan.edit', [
            'persyaratan' => $persyaratan
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persyaratan  $persyaratan
     * @return \Illuminate\Http\Response
     */
    public function persyaratanUpdate(Request $request, Persyaratan $persyaratan)
    {
        $validatedData = $request->validate(
            [
                'jenis_penjaminan' => 'required|unique:persyaratans,jenis_penjaminan,' .$persyaratan->id,
                'rawat_inap' => 'required'
            ]
            );
            $persyaratan->update($validatedData);
            return redirect(route('admin.persyaratan'))->with('success', 'persyaratan berhasil di update');
        //
    }

    public function persyaratanDelete(Persyaratan $persyaratan)
    {
        $persyaratan->delete();
        return redirect(route('admin.persyaratan'))->with('success', 'persyaratan berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persyaratan  $persyaratan
     * @return \Illuminate\Http\Response
     */
    public function persyaratanDestroy(Persyaratan $persyaratan)
    {
        //

    }
}
