<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('tema.blueroses');
});

Route::get('/demo/{kode_tema}', [DemoController::class, 'index'])->name('undangan.demo');
