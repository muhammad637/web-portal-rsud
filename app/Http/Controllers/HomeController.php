<?php

namespace App\Http\Controllers;



use App\Models\Konten;
use App\Models\Layanan;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use App\Models\KategoriLayanan;
use App\Models\LayananUnggulan;
use App\Models\BeritaDanArtikel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    
    public function index()
    {
        $keyCache = 'home_summary';
        $spesialis = Spesialis::all();
        // return $spesialis;
        $layanan_unggulan = KategoriLayanan::where('slug', 'like', '%unggulan%')->first();
        if($layanan_unggulan){
            $layanan = $layanan_unggulan->layanan;
        }else{
            $layanan = [];
        }

        // $data = Cache::get($keyCache);
        // if($data){
        //     return $data;
        // }
        return view('pages.home', [
            'artikel' => Konten::orderBy('created_at','desc')->limit(3)->get(),
            'LayananUnggulan' => $layanan,
            'Spesialis' => $spesialis
        ]);
        // return $layanan_unggulan;
    }
    //
}
