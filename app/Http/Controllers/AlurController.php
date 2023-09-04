<?php

namespace App\Http\Controllers;

use App\Models\Alur;
use App\Models\Persyaratan;
use GrahamCampbell\ResultType\Success;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function alurindex(){
        return view('pages.informasi.alur-persyaratan',[
            'Alur' => Alur::all(),
            'Persyaratan' => Persyaratan::all()
        ]);
    }






    public function alur()
    {
        return view('admin.pages.informasi.alur.index', [
            'alur' => Alur::orderBy('updated_at', 'desc')->get()
        ]);
        
    }

    public function alurCreate()
    {
        return view('admin.pages.informasi.alur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function alurStore(Request $request)
    {
        //
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'gambar' => 'required'
            ]
            );
            
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-alur');
            Alur::create([
                'nama' => $validatedData['nama'],
                'gambar' => $validatedData['gambar']
                
            ]);
            return redirect(route('admin.alur'))->with('succes', 'alur berhasil ditambahkan');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function show(Alur $alur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function alurEdit(Alur $alur)
    {
        return view('admin.pages.informasi.alur.edit', [
            'alur' => $alur
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function alurUpdate(Request $request, Alur $alur)
    {
        //

        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'gambar' => ''
            ]
            );
            if ($request->gambar != null) {
                Storage::delete($alur->gambar);
                $validatedData['gambar'] = $request->file('gambar')->store('image-alur');
            }
            $alur->update($validatedData);
            // return $mcu;
            return redirect(route('admin.alur'))->with('success', 'pelayanan rawat jalan berhasil diupdate');
    }

    public function alurDelete(Alur $alur)
    {
        Storage::delete($alur->gambar);
        return redirect(route('admin.alur'))->with('success', 'alur berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alur  $alur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alur $alur)
    {
        //
    }
}
