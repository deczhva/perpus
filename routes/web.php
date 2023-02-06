<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    
    Route::get('/form-peminjaman', [PeminjamanController::class, 'indexForm'])->name('user.pinjam.form');
    Route::post('/form-peminjaman', [PeminjamanController::class, 'form']);
    Route::get('/riwayat-peminjaman', [PeminjamanController::class, 'riwayatPeminjaman'])->name('user.pinjam.riwayat');
    Route::post('/submit-peminjaman', [PeminjamanController::class, 'store'])->name('submit.pinjam');
});

