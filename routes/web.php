<?php

use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ProgramPanganController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\StrategiController;
use App\Http\Controllers\User\AktivitasController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\GaleriController as UserGaleriController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\NewsController as UserNewsController;
use App\Http\Controllers\User\ProdukController as UserProdukController;
use App\Http\Controllers\User\SertifikatController as UserSertifikatController;
use App\Models\Sertifikat;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/cleareverything', function () {

    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearroute = Artisan::call('route:cache');
    echo "Route cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'manage-profil' => ProfilController::class,
    'manage-sertifikat' => SertifikatController::class,
    'manage-news' => NewsController::class,
    'manage-strategi' => StrategiController::class,
    'manage-galeri' => GaleriController::class,
    'manage-pangan' => ProgramPanganController::class,
    'manage-produk' => ProdukController::class,
    'manage-media' => MediaController::class
]);

Route::get('manage-galeri/{id}/create-image', [GaleriController::class, 'CreateImage'])->name('manage-galeri.create-image');
Route::post('manage-galeri/{id}/store-image', [GaleriController::class, 'StoreImage'])->name('manage-galeri.store-image');
Route::delete('manage-galeri/{id}/destroy-image', [GaleriController::class, 'DestroyImage'])->name('manage-galeri.destroy-image');

Route::resource('manage-wa', PhoneController::class)->only('index', 'edit', 'update');
Route::resource('manage-kegiatan', KegiatanController::class)->except(['show']);
Route::get('manage-request-file', [NotifikasiController::class, 'index'])->name('manage-request-file.index');
Route::put('manage-request-file/send', [NotifikasiController::class, 'send'])->name('manage-request-file.send');

Route::get('manage-produk/add-image/{id}', [ProdukController::class, 'AddImage'])->name('manage-produk.add-image');
Route::post('manage-produk/store-image/{id}', [ProdukController::class, 'StoreImage'])->name('manage-produk.store-image');
Route::delete('manage-produk/destroy-image/{id}', [ProdukController::class, 'DestroyImage'])->name('manage-produk.destroy-image');

// Route::get('/activity-description', [AktivitasController::class, 'activity'])->name('activity-description');
// Route::get('/activity', [AktivitasController::class, 'activities'])->name('activity');
// Route::get('/activity/{slug}', [AktivitasController::class, 'ActivityDetails'])->name('activity.detail');
// Route::post('/activity/post-request-file', [AktivitasController::class, 'PostRequestFile']);
// Route::get('/program-pangan', [AktivitasController::class, 'ProgramPangan'])->name('program-pangan');

Route::get('/program/{slug}/{slug2}', [AktivitasController::class, 'detail'])->name('program.detail');
Route::get('/program/{slug}', [AktivitasController::class, 'program'])->name('program');

Route::get('/photos', [UserGaleriController::class, 'photos'])->name('photos');
Route::get('/photos/{id}/detail', [UserGaleriController::class, 'detail'])->name('photos.detail');
Route::get('/videos', [UserGaleriController::class, 'videos'])->name('videos');

Route::post('/contact-us/post', [ContactUsController::class, 'store'])->name('contact-us.store');

Route::get('/certificate/{id}', [UserSertifikatController::class, 'index'])->name('certificate');

Route::get('/product', [UserProdukController::class, 'index'])->name('product');

Route::get('/news', [UserNewsController::class, 'all'])->name('news');
Route::get('/news/{slug}', [UserNewsController::class, 'detail'])->name('news.detail');

Route::get('/media', [UserNewsController::class, 'AllMedia'])->name('media');
Route::get('/media/{slug}', [UserNewsController::class, 'DetailMedia'])->name('media.detail');

Route::get('/produk/{slug}', [UserProdukController::class, 'detail'])->name('produk.detail');


