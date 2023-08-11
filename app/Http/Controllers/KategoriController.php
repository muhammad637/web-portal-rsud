<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    //
    public function index()
    {
        return Kategori::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama_kategori' => 'required|unique:kategoris,nama_kategori'
            ]
        );

        Kategori::create($validatedData);
        return Kategori::all();
    }

    public function update(Request $request, Kategori $kategori)
    {
       
        // dd($kategori);
        // return $request;
        $validatedData = $request->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori,' . $kategori->id,
            // tambahkan aturan validasi lainnya jika diperlukan
        ]);
        $kategori->update(['nama_kategori' => $validatedData['nama_kategori']]);
        return response()->json(['message' => 'Kategori updated successfully'], 200);
    }


    public function show(Kategori $kategori)
    {
        return Kategori::with('beritadanartikel')->where('nama_kategori', $kategori->nama_kategori)->get();
    }

    public function destroy(Kategori $kategori){
        return $kategori->delete();
    }
}
