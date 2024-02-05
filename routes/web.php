<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanAwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::get('/halamanawal', [HalamanAwalController::class, 'halamanawal']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'daftar']);
Route::post('/simpan', [DaftarController::class, 'simpan']);
