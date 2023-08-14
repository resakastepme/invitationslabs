<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HadirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PengaturanTamuController;
use App\Http\Controllers\PengaturanUndanganController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UcapanController;
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
    Route::resource('riwayat', RiwayatController::class);
    Route::resource('ucapan', UcapanController::class);
    Route::resource('tamu', TamuController::class);
    Route::resource('pengaturan-tamu', PengaturanTamuController::class);
    Route::resource('hadir', HadirController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('pengaturan', PengaturanController::class);
    Route::resource('tagihan', TagihanController::class);
});

// Demo
// Route::get('/demo/{kode_tema}', [DemoController::class, 'index']);     //NABRAK SUBDOMAIN

// Order & Create New
Route::get('/order/{id}', [OrderController::class, 'index']);
Route::get('/new/order/1', [OrderController::class, 'create']);
Route::get('/new/order/2', [OrderController::class, 'mempelai']);
Route::get('/new/order/3', [OrderController::class, 'acara']);
Route::get('/new/order/4', [OrderController::class, 'cerita']);
Route::get('/new/order/5', [OrderController::class, 'gallery']);
Route::post('/new/order/fileUpload', [OrderController::class, 'fileUpload']);
Route::post('/new/order/del', [OrderController::class, 'del']);
Route::post('/new/order/finish', [OrderController::class, 'finish']);
Route::get('/new/order/save', [OrderController::class, 'save']);
Route::get('/new/order/checkpoint', [OrderController::class, 'checkpoint']);

//Tema
Route::get('/tema', [TemaController::class, 'index']);

//Tema Redirect to plan
Route::get('/tema/kode/{kode_tema}', function ($kode_tema) {
    Session::put('tema_order', $kode_tema);
    return redirect()->to('/order/'.$kode_tema);
});

//Plan Redirect to New Order
Route::get('/plan/kode/{kode_plan}', function ($kode_plan) {
    Session::put('plan_order', $kode_plan);
    return redirect()->to('/new/order/1');
});

// Tema redirect to New Order
Route::get('/temanew/kode/{kode_tema}', function ($kode_tema) {
    Session::put('tema_order', $kode_tema);
    return redirect()->to('/new/order/1');
});

//Logout
Route::get('/logout', function () {
    session()->pull('attempt');
    Auth::logout();
    return redirect()->to('login');
});

//Dump
Route::get('/dd', function () {
    dd(session('tema_order'));
});

//RESET SESSION CHECKPOINT
Route::get('/reset', function () {
    Session::pull('datauser');
    if(Session('datauser')  == ''){
        return 'datauser empty';
    }else{
        return Session('datauser').'fail';
    }
});

//Random ae ini ma
Route::get('/check', function () {
    if(Session('datauser')){
        // return array_merge(Session('datauser'), [
        //     'dummy' => Session('dummy')
        // ]);
        return session('datauser');
    }else{
        return 'DATA USER KOSONG BRO';
    }

});
Route::get('/google', function () {
    return view('test');
});
Route::post('/google-proses', [OrderController::class, 'google']);

Route::post('/cropper', [OrderController::class, 'cropper'])->name('cropper');

