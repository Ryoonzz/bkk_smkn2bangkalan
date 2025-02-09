<?php

use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bkk.index');
});

Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');
Route::get('/lowongan/{lowongan}', [LowonganController::class, 'show'])->name('lowongan.show');

Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
Route::get('/perusahaan/{perusahaan}', [PerusahaanController::class, 'show'])->name('perusahaan.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard/lowongan', [LowonganController::class, 'dashboard'])->name('lowongan.dashboard');
Route::get('/dashboard/lowongan/tambah', [LowonganController::class, 'create'])->name('lowongan.tambah');
Route::post('/dashboard/lowongan/store', [LowonganController::class, 'store'])->name('lowongan.store');
Route::get('/dashboard/lowongan/edit/{id}', [LowonganController::class, 'edit'])->name('lowongan.edit');
Route::put('/dashboard/lowongan/update/{id}', [LowonganController::class, 'update'])->name('lowongan.update');
Route::delete('/dashboard/lowongan/{id}', [LowonganController::class, 'destroy'])->name('lowongan.destroy');

Route::get('/dashboard/perusahaan', [PerusahaanController::class, 'dashboard'])->name('perusahaan.dashboard');
Route::get('/dashboard/perusahaan/tambah', [PerusahaanController::class, 'create'])->name('perusahaan.tambah');
Route::post('/dashboard/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
Route::get('/dashboard/perusahaan/edit/{id}', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
Route::put('/dashboard/perusahaan/update/{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
Route::delete('/dashboard/perusahaan/{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
