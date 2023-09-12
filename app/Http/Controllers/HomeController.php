<?php

namespace App\Http\Controllers;



use App\Models\LayananUnggulan;
use App\Models\Spesialis;
use App\Models\BeritaDanArtikel;
use App\Models\KategoriLayanan;
use App\Models\Konten;
use App\Models\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $spesialis = Spesialis::all();
        // return $spesialis;
        $layanan_unggulan = KategoriLayanan::where('slug', 'like', '%unggulan%')->first();
        if($layanan_unggulan){
            $layanan = $layanan_unggulan->layanan;
        }else{
            $layanan = [];
        }
        return view('pages.home', [
            'artikel' => Konten::orderBy('created_at','desc')->limit(3)->get(),
            'LayananUnggulan' => $layanan,
            'Spesialis' => $spesialis
        ]);
        // return $layanan_unggulan;
    }
    //
}
