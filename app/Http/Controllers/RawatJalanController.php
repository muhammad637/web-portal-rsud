<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;

class RawatJalanController extends Controller
{
    //
    public function rawatJalan()
    {
        return view('admin.pages.pelayanan.rawat-jalan.index', [
            'rawat_jalan' => RawatJalan::orderBy('updated_at', 'desc')->get()
        ]);
    }
    public function rawatJalanCreate()
    {
        return view('admin.pages.pelayanan.rawat-jalan.create');
    }
    public function rawatJalanStore(Request $request)
    { {
            // dd($request->all);
            //code...
            $validatedData = $request->validate(
                [
                    'nama' => 'required',
                    'icon' => 'required|image|mimes:png,ico,svg',
                    'slug' => 'required|unique:rawat_jalans,slug',
                    'deskripsi' => 'required',
                    'gambar' => 'required|image|mimes:png,jpg,jpeg,webp',
                ]
            );
            //code...
            $validatedData['gambar'] = $request->file('gambar')->store('image-rawat-jalan');
            $validatedData['icon'] = $request->file('gambar')->store('icon-rawat-jalan');
            RawatJalan::create($validatedData);
            return redirect(route('admin.rawatJalan'))->with('success','berhasil menambahkan pelayanan rawat jalan');
        }
    }
    public function rawatJalanEdit(RawatJalan $rawatJalan)
    {
        return 'testing';
    }
    public function rawatJalanUpdate()
    {
        return 'testing';
    }
    public function rawatJalanDelete()
    {
        return 'testing';
    }
}
