<?php

use App\Models\JadwalDokter;
use App\Models\LayananUnggulan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\LayananUnggulanController;
use App\Http\Controllers\BeritaDanArtikelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicalCheckUpController;
use App\Models\BeritaDanArtikel;

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

// // admin
// Route::get('/admin/kategori', [KategoriController::class, 'index']);
// Route::post('/admin/kategori/store', [KategoriController::class, 'store']);
// Route::put('/admin/kategori/update/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::delete('/admin/kategori/destroy/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// // kategri untuk user
// Route::get('/admin/kategori/{kategori:nama_kategori}', [KategoriController::class, 'show'])->name('kategori.show');


// // berita artikel admin
// Route::get('/admin/berita', [BeritaDanArtikelController::class, 'index']);
// Route::post('/admin/berita/store', [BeritaDanArtikelController::class, 'store']);
// Route::get('/admin/berita/show/{slug}', [BeritaDanArtikelController::class, 'show']);
// Route::get('/admin/berita/edit/{id}', [BeritaDanArtikelController::class, 'edit']);
// Route::put('/admin/berita/update/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'update']);
// Route::delete('/admin/berita/destroy/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'destroy']);


// // spesialis 
// Route::get('/admin/spesialis', [SpesialisController::class, 'index']);
// Route::get('/admin/spesialis/store', [SpesialisController::class, 'store']);
// Route::get('/admin/spesialis/update/{spesialis:id}', [SpesialisController::class, 'update']);


// // dokter
// Route::get('/admin/dokter', [DokterController::class, 'index']);
// Route::post('/admin/dokter/store', [DokterController::class, 'store'])->name('dokter.store');
// Route::get('/admin/dokter/show/{dokter:id}', [DokterController::class, 'show'])->name('dokter.show');
// Route::patch('/admin/dokter/update/{dokter}', [DokterController::class, 'update'])->name('dokter.update');
// Route::delete('/admin/dokter/destroy/{dokter:id}', [DokterController::class, 'delete'])->name('dokter.update');


// // jadwal-dokter
// Route::get('/admin/jadwal-dokter', [JadwalDokterController::class, 'index'])->name('jadwal-dokter.index');
// Route::post('/admin/jadwal-dokter/store', [JadwalDokterController::class, 'store'])->name('jadwal-dokter.store');
// Route::get('/admin/jadwal-dokter/show/{jadwalDokter:id}', [JadwalDokterController::class, 'show'])->name('jadwal-dokter.show');
// Route::get('/admin/jadwal-dokter/update/{jadwalDokter:id}', [JadwalDokterController::class, 'update'])->name('jadwal-dokter.update');
// Route::get('/admin/jadwal-dokter/destroy/{jadwalDokter:id}', [JadwalDokter::class, 'destroy'])->name('jadwal-dokter.destroy');


// // pencarian dokter
// Route::post('/admin/cari-dokter', [DokterController::class, 'cariDokter'])->name('cari-dokter.store');
Route::get('/coba', function () {
    return "keluar";
})->name('coba-coba');
// login
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // admin-dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // admin-layanann-uggulan
    Route::get('/admin/layanan-unggulan', [LayananUnggulanController::class, 'index'])->name('admin.layanan-unggulan');
    // admin-mcu
    Route::get('/admin/mcu', [MedicalCheckUpController::class, 'index'])->name('admin.mcu');
    // admin-rawat-inap
    Route::get('/admin/rawat-inap', [MedicalCheckUpController::class, 'index'])->name('admin.rawat-inap');
    // admin-rawat-jalan
    Route::get('/admin/rawat-jalan', [MedicalCheckUpController::class, 'index'])->name('admin.rawat-jalan');

    // konten
    // kategori
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
    
    
    // berita
    Route::get('/admin/berita',[BeritaDanArtikelController::class,'berita'])->name('admin.berita');
    Route::get('/admin/createSlug', [BeritaDanArtikelController::class, 'slug'])->name('admin.createSlug');
    Route::get('/admin/berita/create', [BeritaDanArtikelController::class, 'beritaCreate'])->name('admin.berita.create');
    Route::post('/admin/berita/store', [BeritaDanArtikelController::class, 'beritaStore'])->name('admin.berita.store');
    Route::get('/admin/berita/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'beritaShow'])->name('admin.berita.show');
    Route::get('/admin/berita/{beritaDanArtikel:slug}/edit', [BeritaDanArtikelController::class, 'beritaEdit'])->name('admin.berita.edit');
    Route::get('/admin/berita/{beritaDanArtikel:slug}/update', [BeritaDanArtikelController::class, 'beritaEdit'])->name('admin.berita.update');
    
    // artikel
    Route::get('/admin/artikel', [KategoriController::class, 'artikel'])->name('admin.artikel');
});





// pelayanan
