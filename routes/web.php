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

Route::get('/layanan/rawat-inap', function () {
    return view('pages.layanan.rawat-inap');
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

Route::get('/berita', function () {
    return view('pages.berita-artikel.berita');
});