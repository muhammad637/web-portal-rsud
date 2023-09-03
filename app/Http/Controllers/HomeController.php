<?php

namespace App\Http\Controllers;



use App\Models\LayananUnggulan;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $spesialis = Spesialis::all();
        $layanan_unggulan = LayananUnggulan::all();
        return view('/pages/home', [
            'LayananUnggulan' => $layanan_unggulan,
            'Spesialis' => $spesialis
        ]);

        // return $layanan_unggulan;
    }
    //
}
