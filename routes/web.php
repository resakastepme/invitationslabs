<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\PengaturanUndanganController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::resource('auth', LoginController::class);

// Admin
Route::get('/admin', function (){
    return view ('admin.dashboard.index');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('tampilan', TampilanController::class);
    Route::get('/tampilan/change/{id}', [TampilanController::class, 'changeTampilan']);
    Route::resource('pengaturan-undangan', PengaturanUndanganController::class);
    Route::post('/pengaturan-undangan/simpanDomain', [PengaturanUndanganController::class, 'simpanDomain']);
    Route::post('/pengaturan-undangan/salamPembukaSubmit', [PengaturanUndanganController::class, 'salamPembukaSubmit']);
    Route::resource('mempelai', MempelaiController::class);
    Route::post('/mempelai/upPria', [MempelaiController::class, 'upPria'])->name('mempelai.upPria');
    Route::resource('acara', AcaraController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('cerita', CeritaController::class);
    Route::resource('rekening', RekeningController::class);
});

// Demo
Route::get('/demo/{kode_tema}', [DemoController::class, 'index']);

//Logout
Route::get('/logout', function () {
    session()->pull('attempt');
    Auth::logout();
    return redirect()->to('login');
});
