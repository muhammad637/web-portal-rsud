<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class RawatJalanController extends Controller
{
    //



    public function rawatJalanindex(){
        return view('pages.layanan.rawat-jalan', [
            'RawatJalan' => RawatJalan::all()
        ]);
    }



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
            $validatedData['icon'] = $request->file('icon')->store('icon-rawat-jalan');
            RawatJalan::create($validatedData);
            return redirect(route('admin.rawatJalan'))->with('success', 'pelayanan rawat jalan berhasil ditambahkan');
        }
    }
    public function rawatJalanEdit(RawatJalan $rawatJalan)
    {
        return view('admin.pages.pelayanan.rawat-jalan.edit', [
            'rawatJalan' => $rawatJalan
        ]);
    }
    public function rawatJalanUpdate(Request $request, RawatJalan $rawatJalan)
    {
       
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'icon' => '',
                'slug' => 'required|unique:rawat_jalans,slug,' . $rawatJalan->id,
                'deskripsi' => 'required',
                'gambar' => '',
            ]
        );
        //code...
        if ($request->icon != null) {
            # code...
            Storage::delete($rawatJalan->icon);
            $validatedData['icon'] = $request->file('icon')->store('icon-rawat-jalan');
        }
        if ($request->gambar != null) {
            Storage::delete($rawatJalan->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('image-rawat-jalan');
        }
        $rawatJalan->update($validatedData);
        // return $rawatJalan;
        return redirect(route('admin.rawatJalan'))->with('success', 'pelayanan rawat jalan berhasil diupdate');
    }
    public function rawatJalanDelete(RawatJalan $rawatJalan)
    {
        Storage::delete($rawatJalan->icon);
        Storage::delete($rawatJalan->gambar);
        return redirect(route('admin.rawatJalan'))->with('success', 'pelayanan rawat jalan berhasil dihapus');

    }
}
