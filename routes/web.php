<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\VerifikasiController;


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
// Home
Route::get('/', [HomeController::class, 'index']);
// Daftar
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
// Login
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login')->middleware('guest');
    Route::post('login/proses','proses')->name('login.proses');
    Route::get('logout','logout');
});
Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware'=>['cek_login:1']], function(){
        Route::resource('admin',AdminController::class);
    });
    Route::group(['middleware'=>['cek_login:2']], function(){
        Route::resource('profile',ProfileController::class);
    });
    Route::group(['middleware'=>['cek_login:3']], function(){
        Route::resource('dashboard',PenggunaController::class);
    });
});
Route::controller(PenggunaController::class)->group(function(){
    Route::post('/update/ktp',[PenggunaController::class,'updatektp'])->middleware('auth');
    Route::post('/update/npwp',[PenggunaController::class,'updatenpwp'])->middleware('auth');
    Route::post('/update/skpns',[PenggunaController::class,'updateskpns'])->middleware('auth');
    Route::post('/update/skpangkat',[PenggunaController::class,'updateskpangkat'])->middleware('auth');
    Route::post('/update/skijazah',[PenggunaController::class,'updateskijazah'])->middleware('auth');
    Route::post('/update/skjabatan',[PenggunaController::class,'updateskjabatan'])->middleware('auth');
    Route::post('/update/sksehat',[PenggunaController::class,'updatesksehat'])->middleware('auth');
    Route::post('/update/suratpernyataan',[PenggunaController::class,'updatesuratpernyataan'])->middleware('auth');
    Route::post('/update/disiplin',[PenggunaController::class,'updatedisiplin'])->middleware('auth');
    Route::post('/update/belajar',[PenggunaController::class,'updatebelajar'])->middleware('auth');
    Route::post('/update/cuti',[PenggunaController::class,'updatecuti'])->middleware('auth');
    Route::post('/update/wirausaha',[PenggunaController::class,'updatewirausaha'])->middleware('auth');
    Route::post('/update/nilai',[PenggunaController::class,'updatenilai'])->middleware('auth');
    Route::post('/update/biografi',[PenggunaController::class,'updatebiografi'])->middleware('auth');
    Route::post('/update/peta',[PenggunaController::class,'updatepeta'])->middleware('auth');
});

Route::controller(PenggunaController::class)->group(function(){
    Route::post('/delete/ktp',[PenggunaController::class,'deletektp'])->middleware('auth');
    Route::post('/delete/npwp',[PenggunaController::class,'deletenpwp'])->middleware('auth');
    Route::post('/delete/skpns',[PenggunaController::class,'deleteskpns'])->middleware('auth');
    Route::post('/delete/skpangkat',[PenggunaController::class,'deleteskpangkat'])->middleware('auth');
    Route::post('/delete/skijazah',[PenggunaController::class,'deleteskijazah'])->middleware('auth');
    Route::post('/delete/skjabatan',[PenggunaController::class,'deleteskjabatan'])->middleware('auth');
    Route::post('/delete/sksehat',[PenggunaController::class,'deletesksehat'])->middleware('auth');
    Route::post('/delete/suratpernyataan',[PenggunaController::class,'deletesuratpernyataan'])->middleware('auth');
    Route::post('/delete/disiplin',[PenggunaController::class,'deletedisiplin'])->middleware('auth');
    Route::post('/delete/belajar',[PenggunaController::class,'deletebelajar'])->middleware('auth');
    Route::post('/delete/cuti',[PenggunaController::class,'deletecuti'])->middleware('auth');
    Route::post('/delete/wirausaha',[PenggunaController::class,'deletewirausaha'])->middleware('auth');
    Route::post('/delete/nilai',[PenggunaController::class,'deletenilai'])->middleware('auth');
    Route::post('/delete/biografi',[PenggunaController::class,'deletebiografi'])->middleware('auth');
    Route::post('/delete/peta',[PenggunaController::class,'deletepeta'])->middleware('auth');
});

Route::get('/informasi', [InformasiController::class, 'index'])->middleware('auth');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->middleware('auth');
Route::get('/pengguna', [PenggunaController::class,'profile'])->middleware('auth');
//edit pengguna
Route::get('/edit/{id}',[PenggunaController::class,'edit'])->middleware('auth');
//Lihat Pendaftar
Route::get('/pendaftar', [PendaftarController::class,'index'])->middleware('auth');
//Verifikasi
Route::resource('/verifikasi', VerifikasiController::class)->middleware('auth');
Route::post('/seleksi', [SeleksiController::class, 'update'])->middleware('auth');
//berita
Route::post('/admin/prosesberita', [AdminController::class, 'store'])->name('admin.berita');

Route::get('/dashboard/upload', [UploadController::class, 'upload'])->middleware('auth');
Route::post('/dashboard/upload/proses', [UploadController::class, 'proses_upload'])->middleware('auth');
Route::get('/dashboard/upload/hapus/{id}', [UploadController::class,'hapus'])->middleware('auth');
Route::get('/editprofile', [ProfileController::class, 'show'])->middleware('auth');
//Lihat Pendaftar
Route::get('crop-image',[ProfileController::class,'crop'])->name('update.photo');
Route::post('crop-image-upload', [ProfileController::class,'crop_proses']);

Route::post('update-biodata',[ProfileController::class,'update_data'])->name('update.biodata');
Route::post('update-biodata-admin',[ProfileController::class,'update_data_admin'])->name('update.biodata.admin');
