<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Konten;
use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\KategoriKonten;
use App\Models\KategoriLayanan;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $dokter = Dokter::orderBy('updated_at', 'desc')->limit(5)->get();
        $layanan = Layanan::orderBy('updated_at', 'desc')->limit(5)->get();
        $jumlahDokter = count(Dokter::all());
        $JumlahArtikel = count(KategoriKonten::all());
        $kategoriLayanan = KategoriLayanan::where('slug', 'like', '%rawat-jalan%')->first();
        // Poli atau klinik
        $jumlahLayanan = count(Layanan::where('kategori_layanan_id', $kategoriLayanan)->get());
        // return $jumlahLayanan;
        return view('admin.pages.dashboard', [
            'dokter' => $dokter,
            'kategoriLayanan' => $kategoriLayanan,
            'layanan' => $layanan,
            'rawatjalan' => 'layanan-rawat-jalan',
            'jumlahDokter' => $jumlahDokter,
            'jumlahArtikel' => $JumlahArtikel,
            'jumlahLayanan' => $jumlahLayanan,
        ]);
    }
}
