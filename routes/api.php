<?php

use App\Http\Controllers\BeritaDanArtikelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('berita/{berita:id}', [BeritaDanArtikelController::class, 'show']);
Route::get('berita/edit/{id}', [BeritaDanArtikelController::class, 'edit']);
Route::post('berita/store', [BeritaDanArtikelController::class, 'store']);
