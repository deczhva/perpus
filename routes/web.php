<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController;
use App\Http\Controllers\user\PengembalianController;
use App\Http\Controllers\user\ProfilController;
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
    
    //pinjam
    Route::get('/form-peminjaman', [PeminjamanController::class, 'indexForm'])->name('user.pinjam.form');
    Route::post('/form-peminjaman', [PeminjamanController::class, 'form']);
    Route::get('/riwayat-peminjaman', [PeminjamanController::class, 'riwayatPeminjaman'])->name('user.pinjam.riwayat');
    Route::get('/submit-peminjaman', [PeminjamanController::class, 'store'])->name('submit.pinjam');

    //kembali
    Route::get('/form-pengembalian', [PengembalianController::class, 'index'])->name('user.kembali.form');
    Route::post('/form-pengembalian', [PengembalianController::class, 'form']);
    Route::get('/riwayat-pengembalian', [PengembalianController::class, 'riwayatPengembalian'])->name('user.kembali.riwayat');
    Route::post('/submit-pengembalian', [PengembalianController::class, 'store'])->name('submit.kembali');

    //profil
    Route::get('/profil', [ProfilController::class, 'index'])->name('user.profil');
    Route::put('/update-profil', [ProfilController::class, 'update'])->name('user.profil.update');

    //pesan
    Route::get('/pesan/masuk', [PesanController::class, 'indexMasuk'])->name('user.pesan.masuk');
    Route::post('/pesan/masuk/update-status', [PesanController::class, 'updateStatus'])->name('user.pesan.masuk.update-status');
    Route::get('/pesan/terkirim', [PesanController::class, 'indexTerkirim'])->name('user.pesan.terkirim');
    Route::post('/pesan/kirim', [PesanController::class, 'kirimPesan'])->name('user.pesan.kirim');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    //anggota
    Route::get('/anggota', [UserController::class, 'indexAnggota'])->name('admin.anggota.index');
    Route::post('/anggota/add', [UserController::class, 'storeAnggota'])->name('admin.anggota.add');
    Route::put('/anggota/update/{id}', [UserController::class, 'updateAnggota'])->name('admin.anggota.update');
    Route::delete('/anggota/delete/{id}', [UserController::class, 'destroyAnggota'])->name('admin.anggota.delete');
});

    
