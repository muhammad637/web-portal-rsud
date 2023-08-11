<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Dokter::all();
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
        // return $request->nama;
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'spesialis_id' => 'required',
                'gambar' => 'required'
            ]
        );
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-dokter');
        return Dokter::create($validatedData);
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        // return Dokter::where('id', $dokter)->get();
        return $dokter;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        // return $request;
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'gambar' => 'required',
                'spesialis_id' => 'required'
            ]
        );

        $dokter->update($validatedData);
        return Dokter::all();
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        //
        $dokter->delete();
        return Dokter::all();
    }

    public function cariDokter(Request $request)
    {
        $namaSpesialis = $request->nama_spesialis;
        // $nama = $request->nama;
        $hariJadwal = $request->hari;
        // return $request->all();
        $JamMulai = $request->jam_mulai;
        $JamSelesai = $request->jam_selesai;
        $dokter = Dokter::whereHas('spesialis', function ($query) use ($namaSpesialis) {
            $query->where('nama_spesialis', $namaSpesialis);
        })
            ->orWhereHas('jadwalDokter', function ($query) use ($hariJadwal) {
                $query->where('hari', $hariJadwal);
            })
        ->orWhere('nama',$request->nama)
            ->get();
        return $dokter;
    }
}
