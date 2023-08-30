<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananUnggulan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class LayananUnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unggulan()
    {
        return view('admin.pages.pelayanan.layanan-unggulan.index', [
            'layanan_unggulan' => LayananUnggulan::orderBy('updated_at', 'desc')->get()
        ]);
    }

    public function unggulanCreate()
    {
        return view('admin.pages.pelayanan.layanan-unggulan.create');
    }
    public function unggulanStore(Request $request)
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
            $validatedData['gambar'] = $request->file('gambar')->store('image-unggulan');
            $validatedData['icon'] = $request->file('icon')->store('icon-unggulan');
            LayananUnggulan::create($validatedData);
            return redirect(route('admin.unggulan'))->with('success', 'pelayanan layanan unggulan berhasil ditambahkan');
        }
    }
    public function unggulanEdit(LayananUnggulan $unggulan)
    {
        return view('admin.pages.pelayanan.layanan-unggulan.edit', [
            'unggulan' => $unggulan
        ]);
    }
    public function unggulanUpdate(Request $request, LayananUnggulan $unggulan)
    {

        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'icon' => '',
                'slug' => 'required|unique:rawat_jalans,slug,' . $unggulan->id,
                'deskripsi' => 'required',
                'gambar' => '',
            ]
        );
        //code...
        if ($request->icon != null) {
            # code...
            Storage::delete($unggulan->icon);
            $validatedData['icon'] = $request->file('icon')->store('icon-unggulan');
        }
        if ($request->gambar != null) {
            Storage::delete($unggulan->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('image-unggulan');
        }
        $unggulan->update($validatedData);
        // return $unggulan;
        return redirect(route('admin.unggulan'))->with('success', 'pelayanan layanan unggulan berhasil diupdate');
    }
    public function unggulanDelete(LayananUnggulan $unggulan)
    {
        Storage::delete($unggulan->icon);
        Storage::delete($unggulan->gambar);
        $unggulan->delete();
        return redirect(route('admin.unggulan'))->with('success', 'pelayanan layanan unggulan berhasil dihapus');
    }
}
