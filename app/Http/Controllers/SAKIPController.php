<?php

namespace App\Http\Controllers;

use App\Models\SAKIP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SAKIPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sakipindex(){
        return view('pages.informasi.sakip', [
            'sakip' => Sakip::all()
        ]);
    }



    public function sakip()
    {
        
        return view('admin.pages.informasi.sakip.index', [
            'sakip' => Sakip::orderBy('updated_at', 'desc')->get()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sakipcreate()
    {
        return view('admin.pages.informasi.sakip.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sakipstore(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'link_file' => 'required',
                
            ]
            );
            Sakip::create([
                'nama' => $validateData['nama'],
                'link_file' => $validateData['link_file']
            ]);
            return redirect(route('admin.sakip'))->with('succes', 'sakip berhasil ditambahkan');
            // return Ikm::all();
        
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sakip  $sakip
     * @return \Illuminate\Http\Response
     */
    public function show(SAKIP $sakip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IKM  $iKM
     * @return \Illuminate\Http\Response
     */
    public function sakipedit(SAKIP $ikm)
    {
        return view('admin.pages.sakip.edit', [
            'sakip' => $ikm
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SAKIP  $iKM
     * @return \Illuminate\Http\Response
     */
    public function sakipUpdate(Request $request, SAKIP $sakip)
    {

        //

        $validateData = $request->validate(
            [
                'nama' => 'required',
                'link_file' => ''
            ]
            );
            $sakip->update($validateData);
            return redirect(route('admin.sakip'))->with('succes', 'sakip berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SAKIP  $sakip
     * @return \Illuminate\Http\Response
     */
    public function destroy(sakip $iKM)
    {
        //
    }
}
