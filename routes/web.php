<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PendaftarController;
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
    Route::get('login','index')->name('login');
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
//edit pengguna
Route::get('/edit/{id}',[PenggunaController::class,'edit'])->middleware('auth');
Route::post('/update/ktp',[PenggunaController::class,'updatektp'])->middleware('auth');
//Lihat Pendaftar
Route::get('/pendaftar', [PendaftarController::class,'index'])->middleware('auth');
//Verifikasi
Route::resource('/verifikasi', VerifikasiController::class)->middleware('auth');

Route::get('/usulan', function(){
    return view('usulan');
})->name('syarat');
Route::get('/uji-kompetensi', function(){
    return view('uji');
})->name('uji');
// Route::get('/verifikasi', [VerifikasiController::class,'index'])->middleware('auth');
// Route::get('/verifikasi/pendaftar/{$id}', [VerifikasiController::class,'show'])->middleware('auth');
// Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard Pengguna
// Route::get('/dashboard', function(){
//     return view('dashboard.index',[
//         'title'=>'Dashboard'
//     ]);
// })->middleware('auth');


// Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');


//web lama
// Route::get('/blog', [PostController::class, 'index']);

// //Single Post
// Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', [CategoryController::class, 'show']);

Route::get('/dashboard/upload', [UploadController::class, 'upload'])->middleware('auth');
Route::post('/dashboard/upload/proses', [UploadController::class, 'proses_upload'])->middleware('auth');
Route::get('/dashboard/upload/hapus/{id}', [UploadController::class,'hapus'])->middleware('auth');
Route::get('/editprofile', [ProfileController::class, 'show'])->middleware('auth');
//Lihat Pendaftar
Route::get('crop-image',[ProfileController::class,'crop'])->name('update.photo');
Route::post('crop-image-upload', [ProfileController::class,'crop_proses']);

Route::post('update-biodata',[ProfileController::class,'update_data'])->name('update.biodata');
