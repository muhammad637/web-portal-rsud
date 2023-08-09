<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    //
    public function index(){
        return Kategori::all();
    }

    public function store(Request $request){
        $validatedData = $request->validate(
            [
                'nama_kategori' => 'required|unique:kategoris,nama_kategori'
            ]
        );

        Kategori::create($validatedData);
        return Kategori::all();
    }

    public function update(Request $request, Kategori $kategori){
        $validatedData = $request->validate(
            [
                'nama_kategori' => 'required|' . Rule::unique('kategoris')->ignore($kategori->id),
            ]
        );

        $kategori->update($validatedData);
        return Kategori::all();
    }

    public function show($kategori){
        return Kategori::with('beritadanartikel')->where('nama_kategori', $kategori)->get();
    }
}
