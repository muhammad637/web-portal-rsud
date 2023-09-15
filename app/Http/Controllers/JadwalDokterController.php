<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwal()
    {
        // return Dokter::all();
        return view('admin.pages.dokter.jadwal-dokter', [
            'jadwalDokter' => JadwalDokter::orderBy('updated_at', 'desc')->get(),
            'dokter' => Dokter::orderBy('updated_at', 'desc')->get()
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
    public function jadwalStore(Request $request)
    {
        //
        $haris =  $request->hari;
        $dokter = Dokter::where('nama', $request->nama_dokter)->first();
        foreach($haris as $hari){
            JadwalDokter::create([
                'dokter_id' => $dokter->id,
                'hari' => $hari,
                'jam_mulai_praktik' => $request->jam_mulai_praktik,
                'jam_selesai_praktik' => $request->jam_selesai_praktik
            ]);
        }
        return redirect()->back()->with('success', 'jadwal dokter berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalDokter $jadwalDokter)
    {
        return "testing";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalDokter $jadwalDokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function jadwalUpdate(Request $request, Dokter $dokter)
    {
        $validateData = $request->validate(
            [
                'jam_mulai_praktik' => 'required',
                'jam_selesai_praktik' => 'required',
            ]
        );
        $jadwalDokterUpdate = JadwalDokter::where('dokter_id', $dokter->id)->where('hari', $request->hari)->get()->first();
        $jadwalDokterUpdate->update($validateData);
        return redirect()->back()->with('success', 'jadwal berhasil diupdate');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function jadwalDelete(Request $request, Dokter $dokter)
    {
        //
        $haris = $request->hari;
        // return $haris;
        foreach ($haris as  $hari) {
            # code...
            $jadwalDokter = JadwalDokter::where('dokter_id', $dokter->id)
                ->where('hari', $hari)
                ->get()
                ->first()
                ->delete();
            $jadwalDokter;
        }
        return redirect()->back()->with('success', 'berhasil delete jadwal dokter');
    }
}
