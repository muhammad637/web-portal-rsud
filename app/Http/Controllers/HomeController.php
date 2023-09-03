<?php

namespace App\Http\Controllers;



use App\Models\LayananUnggulan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan_unggulan = LayananUnggulan::all();
        // return view('/pages/home', [
        //     'LayananUnggulan' => $layanan_unggulan
        // ]);

        return $layanan_unggulan;
    }
    //
}
