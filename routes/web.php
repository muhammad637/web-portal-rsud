<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/rawat-inap', function () {
    return view('pages.layanan.rawat-inap');
});
Route::get('/layanan-unggulan', function () {
    return view('pages.layanan.layanan-unggulan');
});
Route::get('/rawat-jalan', function(){
    return view('pages.layanan.rawat-jalan');
});
Route::get('layanan-mcu',function(){
    return view('pages.layanan.layanan-mcu');
});
Route::get('/caridokter', function () {
    return view('pages.pasien-pengunjung.dokter');
});
Route::get('/ketersediaantempat', function () {
    return view('pages.pasien-pengunjung.ketersediaan-tempat');
});

Route::get('/informasikunjungan', function () {
    return view('pages.pasien-pengunjung.informasi-kunjungan');
});

Route::get('/home' , function(){
    return view('pages.home');
});



Route::get('/artikel', function () {
    return view('pages.berita-artikel.artikel');
});

Route::get('/artikel/klik', function () {
    return view('pages.berita-artikel.artikel-single');
});

Route::get('berita', function(){
    return view('pages.berita-artikel.berita');
});


Route::get('/profil', function () {
    return view('pages.profil.profil');
});

