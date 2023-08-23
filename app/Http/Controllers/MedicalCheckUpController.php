<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckUp;
use Illuminate\Http\Request;

class MedicalCheckUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.pelayanan.mcu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function MedicalCheckUp(Request $request)
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
            MedicalCheckUp::create($validateData);
            return MedicalCheckUp::all();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalCheckUp  $medicalCheckUp
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalCheckUp $medicalCheckUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalCheckUp  $medicalCheckUp
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalCheckUp $medicalCheckUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalCheckUp  $medicalCheckUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalCheckUp $medicalCheckUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalCheckUp  $medicalCheckUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalCheckUp $medicalCheckUp)
    {
        //
    }
}
