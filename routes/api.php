<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\BeritaDanArtikelController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalDokterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// kategori admin
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/create', [KategoriController::class, 'store']);
Route::put('/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/{nama_kategori}', [KategoriController::class, 'show'])->name('kategori.show');


// berita artikel admin
Route::get('berita', [BeritaDanArtikelController::class, 'index']);
Route::post('berita/store', [BeritaDanArtikelController::class, 'store']);
Route::get('berita/show/{slug}', [BeritaDanArtikelController::class, 'show']);
Route::get('berita/edit/{id}', [BeritaDanArtikelController::class, 'edit']);
Route::get('berita/update/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'update']);
Route::get('berita/destroy/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'destroy']);


// spesialis 
Route::get('/spesialis',[SpesialisController::class , 'index']);
Route::get('/spesialis/store',[SpesialisController::class , 'store']);
Route::get('/spesialis/update/{spesialis:id}',[SpesialisController::class , 'update']);


// dokter
Route::get('/dokter',[DokterController::class,'index']);
Route::post('/dokter/store',[DokterController::class,'store']);
Route::get('/dokter/show/{dokter:id}',[DokterController::class,'show']);
Route::get('/dokter/update/{dokter:id}',[DokterController::class,'store']);


// jadwal-dokter
Route::get('/jadwal-dokter',[JadwalDokterController::class,'index']);
Route::post('/jadwal-dokter/store',[JadwalDokterController::class,'store']);
Route::get('/jadwal-dokter/show/{jadwalDokter:id}',[JadwalDokterController::class,'show']);
Route::get('/jadwal-dokter/update/{jadwalDokter:id}',[JadwalDokterController::class,'update']);