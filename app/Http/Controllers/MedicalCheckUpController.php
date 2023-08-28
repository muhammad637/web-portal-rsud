<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalCheckUp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class MedicalCheckUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mcu()
    {
        return view('admin.pages.pelayanan.mcu.index', [
            'mcu' => MedicalCheckUp::orderBy('updated_at', 'desc')->get()
        ]);
    }
    public function mcuCreate()
    {
        return view('admin.pages.pelayanan.mcu.create');
    }
    public function mcuStore(Request $request)
    { {

            $validatedData = $request->validate(
                [
                    'nama' => 'required',
                    'slug' => 'required|unique:rawat_jalans,slug',
                    'deskripsi' => 'required',
                    'gambar' => 'required|image|mimes:png,jpg,jpeg,webp',
                    'icon' => 'required|image|mimes:png,svg,webp'
                ]
            );
            //code...
            $validatedData['gambar'] = $request->file('gambar')->store('image-mcu');
            MedicalCheckUp::create($validatedData);
            return redirect(route('admin.mcu'))->with('success', 'pelayanan rawat jalan berhasil ditambahkan');
        }
    }
    public function mcuEdit(MedicalCheckUp $mcu)
    {
        return view('admin.pages.pelayanan.mcu.edit', [
            'mcu' => $mcu
        ]);
    }
    public function mcuUpdate(Request $request, MedicalCheckUp $mcu)
    {

        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'slug' => 'required|unique:rawat_jalans,slug,' . $mcu->id,
                'deskripsi' => 'required',
                'gambar' => '',
            ]
        );

        if ($request->gambar != null) {
            Storage::delete($mcu->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('image-mcu');
        }
        $mcu->update($validatedData);
        // return $mcu;
        return redirect(route('admin.mcu'))->with('success', 'pelayanan rawat jalan berhasil diupdate');
    }
    public function mcuDelete(MedicalCheckUp $mcu)
    {
        Storage::delete($mcu->gambar);
        return redirect(route('admin.mcu'))->with('success', 'pelayanan rawat jalan berhasil dihapus');
    }
}
