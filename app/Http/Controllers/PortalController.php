<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\KategoriKonten;
use App\Models\KategoriLayanan;
use App\Http\Controllers\Controller;

class PortalController extends Controller
{
    //
    public function home()
    {
        return view();
    }
    // profil
    public function profil()
    {
        return view('pages.profil.profil');
    }
    // pasien_pengunjung
    public function daftarDokter()
    {
    }
    public function cariDokter()
    {
    }
    public function informasiKunjungan()
    {
        return view('pages.pasien-pengunjung.informasi-kunjungan');
    }
    public function ketersediaanKamar()
    {
        return view('pages.pasien-pengunjung.ketersediaan-kamar');
    }
    // berita
    public function konten()
    {
        $paginate = 10;
        $artikel = Konten::orderBy('updated_at', 'desc')->paginate($paginate);
        // return $artikel;
        return view('pages.berita.konten', [
            'konten' => $artikel,
            'kategoriKonten' => KategoriKonten::all(),
            'kontenTerbaru' => Konten::orderBy('created_at', 'desc')
                ->take(3)
                ->get()
        ]);
    }

    public function isiKonten(Konten $konten)
    {
        return view('pages.berita.isi-konten', [
            "isiKonten" => $konten,
            "kategoriKonten" => KategoriKonten::all(),
            'kontenTerbaru' => Konten::orderBy('updated_at', 'desc')->limit(3)->get()
        ]);
    }
    public function kategoriKonten(KategoriKonten $kategoriKonten)
    {
        return view('pages.berita.konten-kategori', [
            "kategoriKonten" => $kategoriKonten,
            "kategoriKontenAll" => KategoriKonten::all(),
            'kontenTerbaru' => Konten::orderBy('updated_at', 'desc')->limit(3)->get()
        ]);
    }
    // layanan
    public function layanan(KategoriLayanan $kategoriLayanan)
    {
        if ($kategoriLayanan->slug == 'layanan-unggulan' || $kategoriLayanan->slug == 'layanan-rawat-jalan') {
            // return view('pages.layanan.indexKhusus');
            return view('pages.layanan.khusus-index',[
                'kategoriLayanan' => $kategoriLayanan
            ]);
        }else{
            // return view('pages.layanan.indexUmum');
            return view('pages.layanan.umum-index', [
                'kategoriLayanan' => $kategoriLayanan
            ]);
        }
    }
    public function layananShow(Layanan $layanan)
    {
        // return $layanan;
        return view('pages.layanan.show',[
            'layanan' => $layanan
        ]);
    }
    // informasi
    public function alurPersyaratan()
    {
    }
    public function tarif()
    {
    }
    public function ikm()
    {
    }
    public function petunjukUmum()
    {
        return view('pages.informasi.petunjuk-umum');
    }
}
