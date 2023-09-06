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

// login
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    // admin-dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    // konten


    // berita
    Route::get('/admin/berita', [BeritaDanArtikelController::class, 'berita'])->name('admin.berita');
    Route::get('/admin/berita/create', [BeritaDanArtikelController::class, 'beritaCreate'])->name('admin.berita.create');
    Route::post('/admin/berita/store', [BeritaDanArtikelController::class, 'beritaStore'])->name('admin.berita.store');
    Route::get('/admin/berita/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'beritaShow'])->name('admin.berita.show');
    Route::get('/admin/berita/{beritaDanArtikel:slug}/edit', [BeritaDanArtikelController::class, 'beritaEdit'])->name('admin.berita.edit');
    Route::put('/admin/berita/{beritaDanArtikel:slug}/update', [BeritaDanArtikelController::class, 'beritaUpdate'])->name('admin.berita.update');


    // artikel
    Route::get('/admin/artikel', [BeritaDanArtikelController::class, 'artikel'])->name('admin.artikel');
    Route::get('/admin/artikel/create', [BeritaDanArtikelController::class, 'artikelCreate'])->name('admin.artikel.create');
    Route::post('/admin/artikel/store', [BeritaDanArtikelController::class, 'artikelStore'])->name('admin.artikel.store');
    Route::get('/admin/artikel/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'artikelShow'])->name('admin.artikel.show');
    Route::get('/admin/artikel/{beritaDanArtikel:slug}/edit', [BeritaDanArtikelController::class, 'artikelEdit'])->name('admin.artikel.edit');
    Route::put('/admin/artikel/{beritaDanArtikel:slug}/update', [BeritaDanArtikelController::class, 'artikelUpdate'])->name('admin.artikel.update');



    // master data
    // kategori
    // konten
    Route::resource('/admin/kategori-konten', KategoriKontenController::class);
    // layanan
    Route::resource('/admin/kategori-layanan', KategoriLayananController::class);

    // pages
    // layanan
    Route::get('/admin/{kategoriLayanan:slug}', [LayananController::class, 'index'])->name('admin.layanan');
    Route::get('/admin/{kategoriLayanan:slug}/{layanan:slug}', [LayananController::class, 'show'])->name('admin.layanan.show');
    Route::get('/admin/{kategoriLayanan:slug}/{layanan:slug}/edit', [LayananController::class, 'edit'])->name('admin.layanan.edit');
    Route::post('/admin/{kategoriLayanan:slug}/{layanan:slug}', [LayananController::class, 'store'])->name('admin.layanan.store');
    Route::put('/admin/{kategoriLayanan:slug}/{layanan:slug}', [LayananController::class, 'update'])->name('admin.layanan.update');
    Route::delete('/admin/{kategoriLayanan:slug}/{layanan:slug}', [LayananController::class, 'delete'])->name('admin.layanan.delete');

    // konten
    Route::resource('/admin/konten', KontenController::class);
    // unggulan

    // dokter
    // daftar-dokter
    Route::get('/admin/dokter', [DokterController::class, 'dokter'])->name('admin.dokter');
    Route::post('/admin/dokter/store', [DokterController::class, 'dokterStore'])->name('admin.dokter.store');
    Route::patch('/admin/dokter/{dokter}/update', [DokterController::class, 'dokterUpdate'])->name('admin.dokter.update');
    Route::delete('/admin/dokter/{dokter:id}/destroy', [DokterController::class, 'dokterDelete'])->name('admin.dokter.delete');
    Route::get('/admin/spesialis/search', [DokterController::class, 'search'])->name('admin.spesialis.search');

    // spesialis
    Route::get('/admin/spesialis', [SpesialisController::class, 'spesialis'])->name('admin.spesialis');
    Route::post('/admin/spesialis/store', [SpesialisController::class, 'spesialisStore'])->name('admin.spesialis.store');
    Route::patch('/admin/spesialis/{spesialis}/update', [SpesialisController::class, 'spesialisUpdate'])->name('admin.spesialis.update');
    Route::delete('/admin/spesialis/{spesialis:id}/destroy', [SpesialisController::class, 'spesialisDelete'])->name('admin.spesialis.delete');
    Route::get('/admin/spesialis/search', [SpesialisController::class, 'search'])->name('admin.spesialis.search');


    // jadwal-dokter
    Route::get('/admin/jadwal', [JadwalDokterController::class, 'jadwal'])->name('admin.jadwal');
    Route::post('/admin/jadwal/store', [JadwalDokterController::class, 'jadwalStore'])->name('admin.jadwal.store');
    Route::patch('/admin/jadwal/{dokter}/update', [JadwalDokterController::class, 'jadwalUpdate'])->name('admin.jadwal.update');
    Route::delete('/admin/jadwal/{dokter}/destroy', [JadwalDokterController::class, 'jadwalDelete'])->name('admin.jadwal.delete');




    Route::get('/admin/createSlug', [BeritaDanArtikelController::class, 'slug'])->name('admin.createSlug');





    ///alur
    Route::get('/admin/alur', [AlurController::class, 'alur'])->name('admin.alur');
    Route::get('/admin/alur/create', [AlurController::class, 'alurCreate'])->name('admin.alur.create');
    Route::post('/admin/alur/store', [AlurController::class, 'alurStore'])->name('admin.alur.store');
    Route::get('/admin/alur/edit', [AlurController::class, 'alurEdit'])->name('admin.alur.edit');
    Route::put('/admin/alur/update', [AlurController::class, 'alurUpdate'])->name('admin.alur.update');
    // Route::put('/admin/alur/{alur:id}/update', [AlurController::class, 'alurUpdate'])->name('admin.alur.update');
    // Route::head('/admin/alur/delete', [AlurController::class, 'alurDelete'])->name('admin.alur.delete');





    ///persyaratan
    Route::get('/admin/persyaratan', [PersyaratanController::class, 'persyaratan'])->name('admin.persyaratan');
    Route::get('/admin/persyaratan/create', [PersyaratanController::class, 'persyaratanCreate'])->name('admin.pesyaratan.create');
    Route::post('/admin/persyaratan/store', [PersyaratanController::class, 'persyaratanStore'])->name('admin.persyaratan.store');
    Route::put('/admin/persyaratan/{persyaratan:id}/update', [PersyaratanController::class, 'persyaratanUpdate'])->name('admin.persyaratan.update');


    ///tarif
    Route::get('/admin/tarif', [TarifController::class, 'index'])->name('admin.tarif');
    Route::post('/admin/tarifTindakan', [TarifController::class, 'tarifTindakan'])->name('admin.tarifTindakan.store');
    Route::post('/admin/tarifKamar', [TarifController::class, 'tarifKamar'])->name('admin.tarifKamar.store');
    Route::put('/admin/tarif/{tarif:id}/update', [TarifController::class, 'update'])->name('admin.tarif.update');
    Route::delete('/admin/tarif/{tarif:id}/delete', [TarifController::class, 'destroy'])->name('admin.tarif.delete');
    //IKM
    Route::get('/admin/index-kepuasan-masyarakat', [IKMController::class, 'ikm'])->name('admin.index-kepuasan-masyarakat');
    Route::get('/admin/index-kepuasan-masyarakat/create', [IKMController::class, 'ikmCreate'])->name('admin.index-kepuasan-masyarakat.create');
    Route::post('/admin/index-kepuasan-masyarakat/store', [IKMController::class, 'ikmStore'])->name('admin.index-kepuasan-masyarakat.store');
    Route::put('/admin/index-kepuasan-masyarakat/{ikm:id}/update', [IKMController::class, 'ikmUpdate'])->name('admin.ikm.update');
    // SAKIP
    Route::get('/admin/sakip', [SAKIPController::class, 'sakip'])->name('admin.sakip');
    Route::get('/admin/sakip/create', [SAKIPController::class, 'sakipCreate'])->name('admin.sakip.create');
    Route::post('/admin/sakip/store', [SAKIPController::class, 'sakipStore'])->name('admin.sakip.store');
    Route::put('/admin/sakip/{sakip:id}/update', [SAKIP::class, 'sakipUpdate'])->name('admin.sakip.update');
});

Route::get('/admin/profile', [ProfilController::class, 'profile'])->name('admin.profile');
Route::put('admin/profile/{user:id}/password', [ProfilController::class, 'passwordProfile'])->name('admin.profile.password');
Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
Route::get('/admin/user/create', [UserController::class, 'userCreate'])->name('admin.user.create');
Route::post('/admin/user/store', [UserController::class, 'userStore'])->name('admin.user.store');



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
