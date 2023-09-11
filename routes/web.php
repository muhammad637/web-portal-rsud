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
use App\Http\Controllers\PortalController;

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
// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
// PROFILE
Route::get('/profil', [PortalController::class, 'profil'])->name('profil');
// PASIEN DAN PENGUNJUNG
Route::group(['prefix' => 'pasien-dan-pegunjung'],function(){
    Route::get('/daftar-dokter', [DokterController::class, 'index'])->name('pasien-dan-pengunjung.dokter');
    Route::get('/daftar-dokter/cari', [DokterController::class, 'cari'])->name('pasien-dan-pengunjung.dokter.cari');
    Route::get('/ketersediaan-kamar', [PortalController::class, 'ketersediaanKamar'])->name('pasien-dan-pengunjung.ketersediaanKamar');
    Route::get('/informasikunjungan', [PortalController::class, 'informasiKunjungan'])->name('pasien-dan-pengunjung.informasiKunjungan');
});
// BERITA
Route::group(['prefix'=>'berita'],function(){
    Route::get('/', [PortalController::class, 'konten'])->name('berita.index');
    Route::get('/{konten:slug}', [PortalController::class, 'isiKonten'])->name('berita.show');
});
Route::get('/kategori-berita/{kategoriKonten:slug}', [PortalController::class, 'kategoriKonten'])->name('kategori-berita.index');
// LAYANAN
Route::group(['prefix' => 'layanan'],function(){
    Route::get('/{kategoriLayanan:slug}', [PortalController::class, 'layanan'])->name('layanan.index');
    Route::get('/kategori-layanan/{layanan:slug}', [PortalController::class, 'layananShow'])->name('layanan.show');
});
// INFORMASI
Route::group(['prefix' => 'informasi'],function(){
    Route::get('/alur-persyaratan', [AlurController::class, 'alurindex'])->name('informasi.alur-persyaratan');
    Route::get('/tarif', [TarifController::class, 'tarifindex'])->name('informasi.tarif');
    Route::get('/ikm', [IKMController::class, 'ikmindex'])->name('informasi.ikm');
    Route::get('/sakip', [SAKIPController::class, 'sakipindex'])->name('informasi.sakip');
    Route::get('/petunjuk-umum', [PortalController::class, 'petunjukUmum'])->name('informasi.petunjukUmum');
});

// Route::get('/artikel/klik', function () {
//     return view('pages.berita-artikel.isi-artikel');
// });

// Route::get('/artikel/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'IsiArtikelindex'])->name('isi-artikel');
// Route::get('/artikel', [BeritaDanArtikelController::class, 'Artikelindex'])->name('artikel');
// Route::get('/kategori/{kategori:nama_kategori}', [KategoriController::class, 'kategori'])->name('kategori-artikel');

// Route::get('/berita', [BeritaDanArtikelController::class, 'Beritaindex'])->name('berita');
// Route::get('/berita/{beritaDanArtikel:slug}', [BeritaDanArtikelController::class, 'IsiBeritaindex'])->name('isi-berita');


// Route::get('/rawat-inap', [RawatInapController::class, 'rawatInapIndex'])->name('rawat-inap');
// Route::get('/rawat-inap', function () {
//     return view('pages.layanan.rawat-inap');
// });
// Route::get('layanan-unggulan', [LayananUnggulanController::class, 'Unggulanindex'])->name('layanan-unggulan');
// Route::get('rawat-jalan', [RawatJalanController::class, 'RawatJalanindex'])->name('rawat-jalan');
// Route::get('layanan-mcu', [MedicalCheckUpController::class, 'mcuindex'])->name('mcu');


// login
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::group(["prefix" => "admin"], function () {
        Route::get('/create-slug', [KontenController::class, 'slug'])->name('admin.createSlug');
        // admin-dashboard
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::group(['prefix' => 'kategori'], function(){
            Route::resource('/kategori-konten', KategoriKontenController::class);
            Route::resource('/kategori-layanan', KategoriLayananController::class);
        });
        Route::group(['prefix' => 'dokter'], function(){
            Route::group(['prefix' => 'spesialis'], function(){
                Route::get('/', [SpesialisController::class, 'spesialis'])->name('admin.spesialis');
                Route::post('/store', [SpesialisController::class, 'spesialisStore'])->name('admin.spesialis.store');
                Route::patch('/{spesialis}/update', [SpesialisController::class, 'spesialisUpdate'])->name('admin.spesialis.update');
                Route::delete('/{spesialis:id}/destroy', [SpesialisController::class, 'spesialisDelete'])->name('admin.spesialis.delete');
                Route::get('/search', [SpesialisController::class, 'search'])->name('admin.spesialis.search');
            });
            Route::group(['prefix' => 'daftar-dokter'], function(){
                Route::get('/', [DokterController::class, 'dokter'])->name('admin.dokter');
                Route::post('/store', [DokterController::class, 'dokterStore'])->name('admin.dokter.store');
                Route::patch('/{dokter}/update', [DokterController::class, 'dokterUpdate'])->name('admin.dokter.update');
                Route::delete('/{dokter:id}/destroy', [DokterController::class, 'dokterDelete'])->name('admin.dokter.delete');
            });
            Route::group(['prefix' => 'jadwal'], function(){
                Route::get('/', [JadwalDokterController::class, 'jadwal'])->name('admin.jadwal');
                Route::post('/store', [JadwalDokterController::class, 'jadwalStore'])->name('admin.jadwal.store');
                Route::patch('/{dokter}/update', [JadwalDokterController::class, 'jadwalUpdate'])->name('admin.jadwal.update');
                Route::delete('/{dokter}/destroy', [JadwalDokterController::class, 'jadwalDelete'])->name('admin.jadwal.delete');
            });
        });
       
        // daftar-dokter
        
        // jadwal-dokter
       
        // informasi
        Route::group(['prefix' => 'informasi'],function(){
            Route::group(['prefix' => "alur"],function(){
                Route::get('/', [AlurController::class, 'alur'])->name('admin.alur');
                Route::get('/create', [AlurController::class, 'alurCreate'])->name('admin.alur.create');
                Route::post('/store', [AlurController::class, 'alurStore'])->name('admin.alur.store');
                Route::get('/edit', [AlurController::class, 'alurEdit'])->name('admin.alur.edit');
                Route::put('/update', [AlurController::class, 'alurUpdate'])->name('admin.alur.update');
            });
            Route::group(['prefix' => "tarif"],function(){
                Route::get('/', [TarifController::class, 'index'])->name('admin.tarif');
                Route::post('/tindakan', [TarifController::class, 'tarifTindakan'])->name('admin.tarifTindakan.store');
                Route::post('/Kamar', [TarifController::class, 'tarifKamar'])->name('admin.tarifKamar.store');
                Route::put('/{tarif:id}/update', [TarifController::class, 'update'])->name('admin.tarif.update');
                Route::delete('/{tarif:id}/delete', [TarifController::class, 'destroy'])->name('admin.tarif.delete');
            });
            Route::group(['prefix' => "index-kepuasan-masyarakat"],function(){
                Route::get('/', [IKMController::class, 'ikm'])->name('admin.index-kepuasan-masyarakat');
                Route::get('/create', [IKMController::class, 'ikmCreate'])->name('admin.index-kepuasan-masyarakat.create');
                Route::post('/store', [IKMController::class, 'ikmStore'])->name('admin.index-kepuasan-masyarakat.store');
                Route::put('/{ikm:id}/update', [IKMController::class, 'ikmUpdate'])->name('admin.ikm.update');
            });
            Route::group(['prefix' => "sakip"],function(){
                Route::get('/', [SAKIPController::class, 'sakip'])->name('admin.sakip');
                Route::get('/create', [SAKIPController::class, 'sakipCreate'])->name('admin.sakip.create');
                Route::post('/store', [SAKIPController::class, 'sakipStore'])->name('admin.sakip.store');
                Route::put('/{sakip:id}/update', [SAKIP::class, 'sakipUpdate'])->name('admin.sakip.update');
            });
            Route::group(['prefix' => "persyaratan"],function(){
                Route::get('/', [PersyaratanController::class, 'persyaratan'])->name('admin.persyaratan');
                Route::get('/create', [PersyaratanController::class, 'persyaratanCreate'])->name('admin.pesyaratan.create');
                Route::post('/store', [PersyaratanController::class, 'persyaratanStore'])->name('admin.persyaratan.store');
                Route::put('/{persyaratan:id}/update', [PersyaratanController::class, 'persyaratanUpdate'])->name('admin.persyaratan.update');
            });
        });
        // master user
        Route::group(['prefix' =>'/user'], function(){
            Route::group(['prefix' =>'/profile'], function(){
                Route::get('/', [ProfilController::class, 'profile'])->name('admin.profile');
                Route::put('/{user:id}/password', [ProfilController::class, 'passwordProfile'])->name('admin.profile.password');
            });
            Route::get('/', [UserController::class, 'index'])->name('admin.user');
            Route::get('/create', [UserController::class, 'userCreate'])->name('admin.user.create');
            Route::post('/store', [UserController::class, 'userStore'])->name('admin.user.store');
        });
        // pages
        // // konten
        Route::group(["prefix" => 'konten'], function () {
            Route::get('/', [KontenController::class, 'index'])->name('admin.konten.index');
            Route::get('/create', [KontenController::class, 'create'])->name('admin.konten.create');
            Route::post('/', [KontenController::class, 'store'])->name('admin.konten.store');
            Route::get('/{konten:slug}', [KontenController::class, 'show'])->name('admin.konten.show');
            Route::get('/{konten:slug}/edit', [KontenController::class, 'edit'])->name('admin.konten.edit');
            Route::put('/{konten:slug}', [KontenController::class, 'update'])->name('admin.konten.update');
            Route::delete('/{konten:slug}', [KontenController::class, 'destroy'])->name('admin.konten.delete');
        });
        // layanan
        Route::group(["perfix" => 'pages'], function(){
            Route::get('/{kategoriLayanan:slug}', [LayananController::class, 'index'])->name('admin.layanan');
            Route::get('/{kategoriLayanan:slug}/create', [LayananController::class, 'create'])->name('admin.layanan.create');
            Route::get('/master-kategori-layanan/show/{layanan:slug}', [LayananController::class, 'show'])->name('admin.layanan.show');
            Route::get('/master-kategori-layanan/edit/{layanan:slug}', [LayananController::class, 'edit'])->name('admin.layanan.edit');
            Route::post('/master-kategori-layanan/store', [LayananController::class, 'store'])->name('admin.layanan.store');
            Route::put('/master-kategori-layanan/update/{layanan:slug}', [LayananController::class, 'update'])->name('admin.layanan.update');
            Route::delete('/master-kategori-layanan/delete/{layanan:slug}', [LayananController::class, 'delete'])->name('admin.layanan.delete');
        });
    });
    // create slug
    
});

