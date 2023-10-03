<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Spesialis;
use App\Models\RawatJalan;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;
use App\Models\KategoriLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;
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

        $dokter = Dokter::orderBy('updated_at', 'desc')->get();
        $spesialis = Spesialis::all();
        // $layananRawatJalan = KategoriLayanan::where('slug','like', "%rawat-jalan%")->get();
        // return $layananRawatJalan;
        return view('pages/pasien-pengunjung/dokter', [
            'Dokter' => $dokter,
            'Spesialis' => $spesialis,
            // 'layanan' => $layananRawatJalan
        ]);

        // return $layanan_unggulan;
    }
    public function cari(Request $request)
    {
        if ($request->spesialis_id == null) {
            $dokter = Dokter::where('nama', 'like', '%' . $request->nama_dokter . '%')->get();
        } else {
            $dokter = Dokter::where('nama', 'like', '%' . $request->nama_dokter . '%')->where('spesialis_id', $request->spesialis_id)->get();
        }
        // return $dokter;
        return view('pages/pasien-pengunjung/dokter', [
            'Dokter' => $dokter,
        ]);
    }

    public function dokter()
    {
        // return Dokter::all();
        $rawatJalan = KategoriLayanan::where('slug', 'like', '%rawat-jalan%')->first();
        // $dokter = Dokter::orderBy('updated_at', 'desc')->get();
        // $dokter = Dokter::with(['RawatJalan' => function($query){
        //     $query->where('slug','poli-gigi');
        // }])->get();
        // return $dokter;
        $dokter = Dokter::all();
        if ($rawatJalan == null) {
            $layanan = [];
        } else {
            $layanan = $rawatJalan->layanan;
        }
        return view('admin.pages.dokter.daftar-dokter', [
            'dokter' => $dokter,
            'layanan' => $layanan,
            'spesialis' => Spesialis::all()
        ]);
        // return Dokter::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dokterCreate()
    {
        //
        $rawatJalan = KategoriLayanan::where('slug', 'like', '%rawat-jalan%')->first();
        return view(
            'admin.pages.dokter.daftar-dokter.create',
            [
                'layanan' => $rawatJalan->layanan
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dokterStore(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate(
            [
                'nama' => 'required|unique:dokters,nama',
                'tipe_dokter' => 'required',
                'nama_spesialis' => '',
                'gambar' => 'required'
            ]
        );
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-dokter');
        $dokter = Dokter::create([
            'nama' => $validatedData['nama'],
            'gambar' => $validatedData['gambar'],
            'tipe_dokter' => $request->tipe_dokter
        ]);
        $dokter->rawatJalan()->sync($request->rawatJalan);
        $spesialis = '';
        if ($request->nama_spesialis) {
            # code...
            $spesialis =  Spesialis::where('nama_spesialis', 'like', '%' . $request->nama_spesialis . '%')->first();
            $dokter->update(['spesialis_id' => $spesialis->id]);
        }


        return redirect()->route('admin.dokter')->with('success', 'dokter berhasil ditambahkan');

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
    public function dokterEdit(Dokter $dokter)
    {
        $layanan_id = $dokter->rawatJalan->pluck('id')->toArray();
        // return $layanan_id;
        $rawatJalan = KategoriLayanan::where('slug', 'like', '%rawat-jalan%')->first();
        return view(
            'admin.pages.dokter.daftar-dokter.edit',
            [
                'layanan' => $rawatJalan->layanan,
                'dokter' => $dokter,
                'layanan_id' => $layanan_id
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function dokterUpdate(Request $request, Dokter $dokter)
    {
        $request->validate(
            [
                'nama' => 'required',
            ]
        );
        // return $request->all();
        $gambar = $dokter->gambar;
        if ($request->gambar) {
            Storage::delete($dokter->gambar);
            $gambar = $request->file('gambar')->store('gambar-dokter');
        }
        $spesialis =  Spesialis::where('nama_spesialis', 'like', '%' . $request->nama_spesialis . '%')->first();
        if ($request->tipe_dokter == 'umum') {
            $dokter->update([
                'spesialis_id' => null,
            ]);
        } else {
            $dokter->update([
                'spesialis_id' => $spesialis->id,
            ]);
        }
        $dokter->update([
            'nama' => $request->nama,
            'gambar' => $gambar,
            'tipe_dokter' => $request->tipe_dokter,
        ]);
        $dokter->rawatJalan()->sync($request->rawatJalan);
        // $merging = array_merge(['gambar' => $gambar], $validatedData);
        return redirect(route('admin.dokter'))->with('success', 'dokter berhasil diupdate');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function dokterDelete(Dokter $dokter)
    {
        //
        Storage::delete($dokter->gambar);
        $dokter->delete();
        return redirect()->back()->with('success', 'dokter berhasil dihapus');
    }


    public function search(Request $request)
    {
        $query = $request->get('query');
        $results = Spesialis::where('nama_spesialis', 'like', '%' . $query . '%')->get();
        return response()->json($results);
    }
}
