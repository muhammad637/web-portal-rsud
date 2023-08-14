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
            return $request;
            $validatedData = $request->validate(
                [
                    'nama' => 'required',
                    'gambar' => 'nullable',
                    'spesialis_id' => 'required'
                ]
            );
            if (!empty($validatedData['gambar'])) {
                # code...
                $validatedData['gambar'] = $request->file('gambar')->store('gambar-dokter');
            }   
            $dokter->update($validatedData);
            return $dokter;
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
        // Validasi input
        $request->validate([
            'nama_dokter' => 'nullable|string',  // nullable artinya input boleh kosong
            'nama_spesialis' => 'nullable|string', // nullable artinya input boleh kosong
            'hari_jadwal' => 'nullable|string', // nullable artinya input boleh kosong
            'jam_mulai' => 'nullable|string', // nullable artinya input boleh kosong
            'jam_selesai_praktik' => 'nullable|string', // nullable artinya input boleh kosong
        ]);

        // Ambil input dari form
        $namaDokter = $request->input('nama_dokter');
        $namaSpesialis = $request->input('nama_spesialis');
        $hariJadwal = $request->input('hari_jadwal');
        $jamMulai = $request->input('jam_mulai');
        $jamSelesaiPraktik = $request->input('jam_selesai_praktik');

        // Query pencarian dokter
        $query = Dokter::query();

        if (!empty($namaDokter)) {
            $query->where('nama', 'LIKE', '%' . $namaDokter . '%');
        }

        if (!empty($namaSpesialis)) {
            $query->whereHas('spesialis', function ($subquery) use ($namaSpesialis) {
                $subquery->where('nama_spesialis', $namaSpesialis);
            });
        }

        if (!empty($hariJadwal)) {
            $query->whereHas('jadwalDokter', function ($subquery) use ($hariJadwal) {
                $subquery->where('hari', $hariJadwal);
            });
        }

        if (!empty($jamMulai) && !empty($jamSelesaiPraktik)) {
            $query->whereHas('jadwalDokter', function ($subquery) use ($jamMulai, $jamSelesaiPraktik) {
                $subquery->whereBetween('jam_mulai_praktik', [$jamMulai, $jamSelesaiPraktik])
                    ->orWhereBetween('jam_selesai_praktik', [$jamMulai, $jamSelesaiPraktik]);
            });
        }

        // Ambil hasil pencarian
        $dokter = $query->get();

        // Kirim hasil pencarian ke view
        return  ['dokter' => $dokter];
    }
    
}
