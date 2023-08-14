<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\BeritaDanArtikelController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalDokterController;
use App\Models\JadwalDokter;

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
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::put('/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/destroy/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// kategri untuk user
Route::get('/kategori/{kategori:nama_kategori}', [KategoriController::class, 'show'])->name('kategori.show');


// berita artikel admin
Route::get('berita', [BeritaDanArtikelController::class, 'index']);
Route::post('berita/store', [BeritaDanArtikelController::class, 'store']);
Route::get('berita/show/{slug}', [BeritaDanArtikelController::class, 'show']);
Route::get('berita/edit/{id}', [BeritaDanArtikelController::class, 'edit']);
Route::put('berita/update/{beritaDanArtikel}', [BeritaDanArtikelController::class, 'update']);
Route::delete('berita/destroy/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'destroy']);


// spesialis 
Route::get('/spesialis', [SpesialisController::class, 'index']);
Route::get('/spesialis/store', [SpesialisController::class, 'store']);
Route::get('/spesialis/update/{spesialis:id}', [SpesialisController::class, 'update']);


// dokter
Route::get('/dokter', [DokterController::class, 'index']);
Route::post('/dokter/store', [DokterController::class, 'store'])->name('dokter.store');
Route::get('/dokter/show/{dokter:id}', [DokterController::class, 'show'])->name('dokter.show');
Route::patch('/dokter/update/{dokter}', [DokterController::class, 'update'])->name('dokter.update');
Route::delete('/dokter/destroy/{dokter:id}', [DokterController::class, 'delete'])->name('dokter.update');


// jadwal-dokter
Route::get('/jadwal-dokter', [JadwalDokterController::class, 'index'])->name('jadwal-dokter.index');
Route::post('/jadwal-dokter/store', [JadwalDokterController::class, 'store'])->name('jadwal-dokter.store');
Route::get('/jadwal-dokter/show/{jadwalDokter:id}', [JadwalDokterController::class, 'show'])->name('jadwal-dokter.show');
Route::get('/jadwal-dokter/update/{jadwalDokter:id}', [JadwalDokterController::class, 'update'])->name('jadwal-dokter.update');
Route::get('/jadwal-dokter/destroy/{jadwalDokter:id}', [JadwalDokter::class, 'destroy'])->name('jadwal-dokter.destroy');


// pencarian dokter
Route::post('/cari-dokter', [DokterController::class, 'cariDokter'])->name('cari-dokter.store');
