<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use Illuminate\Http\Request;

class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function RawatInap(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'slug' => 'required',
                'icon' => 'required',
                'gambar' => 'required',
                'deskripsi' => 'required'
            ]
            );
            RawatInap::create($validateData);
            return RawatInap::all();
        //
    }

   
}
