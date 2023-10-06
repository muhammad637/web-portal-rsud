<?php

namespace App\Http\Controllers;

use App\Models\jumlah_kamar;
use Illuminate\Http\Request;

class JumlahKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlahkamarindex()
    {
        // $count = jumlah_kamar::where('jumlah')->count();
        // return $count;
       
        return view('pages.pasien-pengunjung.ketersediaan-kamar',[
            'jumlah_kamar' => jumlah_kamar::all(),
            'jumlahKamar' => 0
        ]);
        //
    }

    public function jumlahkamar(){
        return view('admin.pages.informasi.ketersediaan_kamar.index', [
            'jumlah_kamar' => jumlah_kamar::orderBy('updated_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlahkamarCreate()
    {
        return view('admin.pages.informasi.jumlahkamar.create');
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
        $validatedData = $request->validate(
            [
                'nama_ruangan' => 'required',
                'kelas' => 'required',
                'jumlah' => 'required'
            ]
            );
        //

        jumlah_kamar::create([
            'nama_ruangan' => $validatedData['nama_ruangan'],
            'kelas' => $validatedData['kelas'],
            'jumlah' => $validatedData['jumlah']
        ]);
        return redirect()->back()->with('success', 'jumlahkamar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jumlah_kamar  $jumlah_kamar
     * @return \Illuminate\Http\Response
     */
    public function show(jumlah_kamar $jumlah_kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jumlah_kamar  $jumlah_kamar
     * @return \Illuminate\Http\Response
     */
    public function jumlahkamarEdit(jumlah_kamar $jumlah_kamar)
    {
        return view('admin.pages.informasi.jumlahkamar.edit', [
            'jumlah_kamar' => $jumlah_kamar
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jumlah_kamar  $jumlah_kamar
     * @return \Illuminate\Http\Response
     */
    public function jumlahkamarUpdate(Request $request, jumlah_kamar $jumlah_kamar)
    {
        $validatedData = $request->validate(
            [
                'nama_ruangan' => '',
                'kelas' => '',
                'jumlah' => ''
            ]
            );
        $jumlah_kamar->update($validatedData);
        return redirect()->back()->with('success', 'jumlah kamar berhasil di update');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jumlah_kamar  $jumlah_kamar
     * @return \Illuminate\Http\Response
     */


     public function jumlahkamarDelete(jumlah_kamar $jumlah_kamar){
        $jumlah_kamar->delete();
        return redirect()->back()->with('success', 'jumlah kamar berhasil dihapus');
     }
    public function destroy(jumlah_kamar $jumlah_kamar)
    {
        //
    }
}
