<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function rawatInapIndex(){
        $rawatInap = RawatInap::all();
        return view('pages.layanan.rawat-inap', [
            'RawatInap' => $rawatInap
        ]);
    }




    public function rawatInap()
    {
        return view('admin.pages.pelayanan.rawat-inap.index', [
            'rawatInap' => RawatInap::orderBy('updated_at', 'desc')->get()
        ]);
    }
    public function rawatInapCreate()
    {
        return view('admin.pages.pelayanan.rawat-inap.create');
    }
    public function rawatInapStore(Request $request)
    { {
            
            $validatedData = $request->validate(
                [
                    'nama' => 'required',
                    'slug' => 'required|unique:rawat_jalans,slug',
                    'deskripsi' => 'required',
                    'gambar' => 'required|image|mimes:png,jpg,jpeg,webp',
                ]
            );
            //code...
            $validatedData['gambar'] = $request->file('gambar')->store('image-rawat-inap');
            RawatInap::create($validatedData);
            return redirect(route('admin.rawatInap'))->with('success', 'pelayanan rawat jalan berhasil ditambahkan');
        }
    }
    public function rawatInapEdit(RawatInap $rawatInap)
    {
        return view('admin.pages.pelayanan.rawat-inap.edit', [
            'rawatInap' => $rawatInap
        ]);
    }
    public function rawatInapUpdate(Request $request, RawatInap $rawatInap)
    {

        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'slug' => 'required|unique:rawat_jalans,slug,' . $rawatInap->id,
                'deskripsi' => 'required',
                'gambar' => '',
            ]
        );
      
        if ($request->gambar != null) {
            Storage::delete($rawatInap->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('image-rawat-inap');
        }
        $rawatInap->update($validatedData);
        // return $rawatInap;
        return redirect(route('admin.rawatInap'))->with('success', 'pelayanan rawat jalan berhasil diupdate');
    }
    public function rawatInapDelete(RawatInap $rawatInap)
    {
        Storage::delete($rawatInap->gambar);
        return redirect(route('admin.rawatInap'))->with('success', 'pelayanan rawat jalan berhasil dihapus');
    }

}
