<?php

namespace App\Http\Controllers;

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
        $konten = Konten::orderBy('updated_at', 'desc')->limit(5)->get();
        $layanan = Layanan::orderBy('updated_at', 'desc')->limit(5)->get();
        $jumlahKategoriLayanan = count(KategoriLayanan::all());
        $jumlahKategoriKonten = count(KategoriKonten::all());
        $jumlahLayanan = count(Layanan::all());
        $jumlahKonten = count(Konten::all());
        return view('admin.pages.dashboard', [
            'konten' => $konten,
            'layanan' => $layanan,
            'jumlahKategoriLayanan' => $jumlahKategoriLayanan,
            'jumlahKategoriKonten' => $jumlahKategoriKonten,
            'jumlahKonten' => $jumlahKonten,
            'jumlahLayanan' => $jumlahLayanan,
        ]);
    }
}
