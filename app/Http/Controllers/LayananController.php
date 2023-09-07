<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\KategoriLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KategoriLayanan $kategoriLayanan)
    {

        // return $layanan;
        return view('admin.master-pages.layanan.index', [
            'kategoriLayanan' => $kategoriLayanan
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(KategoriLayanan $kategoriLayanan)
    {
        //
        return view('admin.master-pages.layanan.create', [
            'kategoriLayanan' => $kategoriLayanan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all(); 

        $validateData = $request->validate(
            [
                'kategori_layanan_id' => 'required',
                'nama' => 'required',
                'slug' => 'required|unique:layanans,slug',
                'icon' => '',
                'gambar' => 'required',
                'deskripsi' => 'required',
            ]
        );
        if ($request->hasFile('icon')) {
            // Lakukan penyimpanan gambar dan ikon di sini
            $icon = $request->file('icon')->store('icon-layanan');
            // return [$gambar, $icon];
        } else {
            // Handle jika file gambar atau ikon tidak ada
            $icon =  null;
        }
        $gambar = $request->file('gambar')->store('image-layanan');
        $validatedData['gambar'] = $request->file('gambar')->store('image-layanan');
        $validatedData['icon'] = $request->file('icon')->store('icon-layanan');
        $postLayanan = [
            'kategori_layanan_id' => $request->kategori_layanan_id,
            'nama' => $request->nama,
            'slug' => $request->slug,
            'icon' => $icon,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi
        ];
        $layanan = Layanan::create($postLayanan);
        // return $layanan;
        return redirect(route('admin.layanan'))->with('success', 'data layanan pages  berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        return Layanan::where('slug', $layanan->slug)->get();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan, KategoriLayanan $kategoriLayanan)
    {
        return view('admin.master-pages.layanan.edit', [
            'layanan' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'gambar' => '',
                'slug' => 'required|unique:layanans,slug,' . $layanan->id,
                'deskripsi' => 'required',
                'icon' => ''
            ]
        );
        $icon = $layanan->icon;
        $gambar = $layanan->gambar;
        if ($request->hasFile('icon')) {
            # code...
            Storage::delete($layanan->icon);
            $icon = $request->file('icon')->store('icon-layanan');
        }
        if ($request->hasFile('gambar')) {
            Storage::delete($layanan->gambar);
            $gambar = $request->file('gambar')->store('image-layanan');
        }
        $update = [
            'nama' => $request->nama,
            'slug' => $request->slug,
            'icon' => $icon,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi
        ];
        // return $update;
        // Layanan::create($validateData);
        return redirect(route('admin.layanan'))->with('success', 'data layanan pages  berhasil diupdate');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function delete(Layanan $layanan)
    {
        //
        // return [$layanan, $kategoriLayanan];
        // return $layanan;
        $layanan->delete();
        return redirect()->back()->with('success', 'data layanan berhasil di hapus');
    }
}
