<?php

use App\Models\SAKIP;
use App\Models\RawatInap;
use App\Models\Persyaratan;
use App\Models\JadwalDokter;
use App\Models\LayananUnggulan;
use App\Models\BeritaDanArtikel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IKMController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SAKIPController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RawatInapController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\PetunjukUmumController;
use App\Http\Controllers\KategoriKontenController;
use App\Http\Controllers\MedicalCheckUpController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\KategoriLayananController;
use App\Http\Controllers\LayananUnggulanController;
use App\Http\Controllers\BeritaDanArtikelController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\LayananController;

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

Route::get('/profil', function () {
    return view('pages.profil.profil');
});
Route::get('/alur-persyaratan', [AlurController::class, 'alurindex'])->name('alur-persyaratan');
Route::get('tarif', [TarifController::class, 'tarifindex'])->name('tarif');
Route::get('ikm', [IKMController::class, 'ikmindex'])->name('ikm');
Route::get('sakip', [SAKIPController::class, 'sakipindex'])->name('sakip');
// Route::get('/artikel/klik', function () {
//     return view('pages.berita-artikel.isi-artikel');
// });

Route::get('/artikel/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'IsiArtikelindex'])->name('isi-artikel');
Route::get('/artikel', [BeritaDanArtikelController::class, 'Artikelindex'])->name('artikel');
Route::get('/kategori/{kategori:nama_kategori}', [KategoriController::class, 'kategori'])->name('kategori-artikel');

Route::get('/berita', [BeritaDanArtikelController::class, 'Beritaindex'])->name('berita');
Route::get('/berita/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'IsiBeritaindex'])->name('isi-berita');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/rawat-inap', [RawatInapController::class, 'rawatInapIndex'])->name('rawat-inap');
// Route::get('/rawat-inap', function () {
//     return view('pages.layanan.rawat-inap');
// });
Route::get('layanan-unggulan', [LayananUnggulanController::class, 'Unggulanindex'])->name('layanan-unggulan');
Route::get('rawat-jalan', [RawatJalanController::class, 'RawatJalanindex'])->name('rawat-jalan');
Route::get('layanan-mcu', [MedicalCheckUpController::class, 'mcuindex'])->name('mcu');
Route::get('/caridokter', [DokterController::class, 'index'])->name('dokter');
Route::get('/caridokter/cari', [DokterController::class, 'cari'])->name('dokter.cari');

Route::get('/ketersediaantempat', function () {
    return view('pages.pasien-pengunjung.ketersediaan-tempat');
});

Route::get('/informasikunjungan', function () {
    return view('pages.pasien-pengunjung.informasi-kunjungan');
});
Route::get('petunjuk-umum', function () {
    return view('pages.informasi.petunjuk-umum');
});

Route::get('/home', [HomeController::class, 'index']);


// login
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/admin/profile', [ProfilController::class, 'profile'])->name('admin.profile');
Route::put('admin/profile/{user:id}/password', [ProfilController::class, 'passwordProfile'])->name('admin.profile.password');
Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
Route::get('/admin/user/create', [UserController::class, 'userCreate'])->name('admin.user.create');
Route::post('/admin/user/store', [UserController::class, 'userStore'])->name('admin.user.store');


Route::middleware('auth')->group(function () {
    // create slug
    Route::get('/admin/create-slug', [KontenController::class, 'slug'])->name('admin.createSlug');
    // admin-dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // master data
    // kategori
    // konten
    Route::resource('/admin/kategori-konten', KategoriKontenController::class);
    // layanan
    Route::resource('/admin/kategori-layanan', KategoriLayananController::class);
    // pages
    // // konten
    Route::resource('/admin/konten', KontenController::class);
    // layanan
    Route::get('/admin/pages/{kategoriLayanan:slug}', [LayananController::class, 'index'])->name('admin.layanan');
    Route::get('/admin/pages/{kategoriLayanan:slug}/create', [LayananController::class, 'create'])->name('admin.layanan.create');
    Route::get('/admin/pages/master-kategori-layanan/show/{layanan:slug}', [LayananController::class, 'show'])->name('admin.layanan.show');
    Route::get('/admin/pages/master-kategori-layanan/edit/{layanan:slug}', [LayananController::class, 'edit'])->name('admin.layanan.edit');
    Route::post('/admin/pages/master-kategori-layanan/store', [LayananController::class, 'store'])->name('admin.layanan.store');
    Route::put('/admin/pages/master-kategori-layanan/update/{layanan:slug}', [LayananController::class, 'update'])->name('admin.layanan.update');
    Route::delete('/admin/pages/master-kategori-layanan/delete/{layanan:slug}', [LayananController::class, 'delete'])->name('admin.layanan.delete');
    
    // dokter
    // spesialis
    // Route::get('/admin/spesialis/search', [DokterController::class, 'search'])->name('admin.spesialis.search');
    Route::get('/admin/dokter/spesialis', [SpesialisController::class, 'spesialis'])->name('admin.spesialis');
    Route::post('/admin/dokter/spesialis/store', [SpesialisController::class, 'spesialisStore'])->name('admin.spesialis.store');
    Route::patch('/admin/dokter/spesialis/{spesialis}/update', [SpesialisController::class, 'spesialisUpdate'])->name('admin.spesialis.update');
    Route::delete('/admin/dokter/spesialis/{spesialis:id}/destroy', [SpesialisController::class, 'spesialisDelete'])->name('admin.spesialis.delete');
    Route::get('/admin/dokter/spesialis/search', [SpesialisController::class, 'search'])->name('admin.spesialis.search');
    // daftar-dokter
    Route::get('/admin/dokter/daftar-dokter', [DokterController::class, 'dokter'])->name('admin.dokter');
    Route::post('/admin/dokter/daftar-dokter/store', [DokterController::class, 'dokterStore'])->name('admin.dokter.store');
    Route::patch('/admin/dokter/daftar-dokter/{dokter}/update', [DokterController::class, 'dokterUpdate'])->name('admin.dokter.update');
    Route::delete('/admin/dokter/daftar-dokter/{dokter:id}/destroy', [DokterController::class, 'dokterDelete'])->name('admin.dokter.delete');
    // jadwal-dokter
    Route::get('/admin/dokter/jadwal', [JadwalDokterController::class, 'jadwal'])->name('admin.jadwal');
    Route::post('/admin/dokter/jadwal/store', [JadwalDokterController::class, 'jadwalStore'])->name('admin.jadwal.store');
    Route::patch('/admin/dokter/jadwal/{dokter}/update', [JadwalDokterController::class, 'jadwalUpdate'])->name('admin.jadwal.update');
    Route::delete('/admin/dokter/jadwal/{dokter}/destroy', [JadwalDokterController::class, 'jadwalDelete'])->name('admin.jadwal.delete');
    // informasi
    ///alur
    Route::get('/admin/informasi/alur', [AlurController::class, 'alur'])->name('admin.alur');
    Route::get('/admin/informasi/alur/create', [AlurController::class, 'alurCreate'])->name('admin.alur.create');
    Route::post('/admin/informasi/alur/store', [AlurController::class, 'alurStore'])->name('admin.alur.store');
    Route::get('/admin/informasi/alur/edit', [AlurController::class, 'alurEdit'])->name('admin.alur.edit');
    Route::put('/admin/informasi/alur/update', [AlurController::class, 'alurUpdate'])->name('admin.alur.update');
    // Route::put('/admin/informasi/alur/{alur:id}/update', [AlurController::class, 'alurUpdate'])->name('admin.alur.update');
    // Route::head('/admin/informasi/alur/delete', [AlurController::class, 'alurDelete'])->name('admin.alur.delete');
    //persyaratan
    Route::get('/admin/informasi/persyaratan', [PersyaratanController::class, 'persyaratan'])->name('admin.persyaratan');
    Route::get('/admin/informasi/persyaratan/create', [PersyaratanController::class, 'persyaratanCreate'])->name('admin.pesyaratan.create');
    Route::post('/admin/informasi/persyaratan/store', [PersyaratanController::class, 'persyaratanStore'])->name('admin.persyaratan.store');
    Route::put('/admin/informasi/persyaratan/{persyaratan:id}/update', [PersyaratanController::class, 'persyaratanUpdate'])->name('admin.persyaratan.update');
    ///tarif
    Route::get('/admin/informasi/tarif', [TarifController::class, 'index'])->name('admin.tarif');
    Route::post('/admin/informasi/tarifTindakan', [TarifController::class, 'tarifTindakan'])->name('admin.tarifTindakan.store');
    Route::post('/admin/informasi/tarifKamar', [TarifController::class, 'tarifKamar'])->name('admin.tarifKamar.store');
    Route::put('/admin/informasi/tarif/{tarif:id}/update', [TarifController::class, 'update'])->name('admin.tarif.update');
    Route::delete('/admin/informasi/tarif/{tarif:id}/delete', [TarifController::class, 'destroy'])->name('admin.tarif.delete');
    //IKM
    Route::get('/admin/informasi/index-kepuasan-masyarakat', [IKMController::class, 'ikm'])->name('admin.index-kepuasan-masyarakat');
    Route::get('/admin/informasi/index-kepuasan-masyarakat/create', [IKMController::class, 'ikmCreate'])->name('admin.index-kepuasan-masyarakat.create');
    Route::post('/admin/informasi/index-kepuasan-masyarakat/store', [IKMController::class, 'ikmStore'])->name('admin.index-kepuasan-masyarakat.store');
    Route::put('/admin/informasi/index-kepuasan-masyarakat/{ikm:id}/update', [IKMController::class, 'ikmUpdate'])->name('admin.ikm.update');
    // SAKIP
    Route::get('/admin/informasi/sakip', [SAKIPController::class, 'sakip'])->name('admin.sakip');
    Route::get('/admin/informasi/sakip/create', [SAKIPController::class, 'sakipCreate'])->name('admin.sakip.create');
    Route::post('/admin/informasi/sakip/store', [SAKIPController::class, 'sakipStore'])->name('admin.sakip.store');
    Route::put('/admin/informasi/sakip/{sakip:id}/update', [SAKIP::class, 'sakipUpdate'])->name('admin.sakip.update');
});
