<?php

namespace App\Http\Controllers;

use App\Models\IKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function ikmindex(){
        return view('pages.informasi.ikm', [
            'ikm' => IKM::orderBy('updated_at', 'desc')->get(),
        ]);
    }


    public function ikm()
    {
        
        return view('admin.pages.informasi.index-kepuasan-masyarakat.index', [
            'ikm' => IKM::orderBy('updated_at', 'desc')->get()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ikmcreate()
    {
        return view('admin.pages.informasi.index-kepuasan-masyarakat.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ikmstore(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'pdf' => 'required',
                
            ]
            );
            Ikm::create([
                'nama' => $validateData['nama'],
                'pdf' => $validateData['pdf']
            ]);
            return redirect(route('admin.index-kepuasan-masyarakat'))->with('success', 'ikm berhasil ditambahkan');
            // return Ikm::all();
        
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IKM  $iKM
     * @return \Illuminate\Http\Response
     */
    public function show(IKM $iKM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IKM  $iKM
     * @return \Illuminate\Http\Response
     */
    public function ikmedit(IKM $ikm)
    {
        return view('admin.pages.informasi.index-kepuasan-masyarakat.edit', [
            'ikm' => $ikm
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IKM  $iKM
     * @return \Illuminate\Http\Response
     */
    public function ikmUpdate(Request $request, IKM $ikm)
    {

        //

        $validateData = $request->validate(
            [
                'nama' => 'required',
                'pdf' => ''
            ]
            );
            $ikm->update($validateData);
            return redirect(route('admin.index-kepuasan-masyarakat'))->with('success', 'ikm berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IKM  $iKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(IKM $iKM)
    {
        //
    }

    public function ikmDelete(IKM $ikm){
        $ikm->delete();
        return redirect()->back()->with('success','data berhasil dihapus');
    }
}
