<?php

use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardAlumniController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('bkk.index');
// });
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::get('/visi-misi', function () {
    return view('bkk.visimisi');
});
Route::get('/motto', function () {
    return view('bkk.motto');
});
Route::get('/struktur', function () {
    return view('bkk.struktur');
});

Route::get('/pengumuman', function () {
    return view('bkk.pengumuman');
});

Route::get('/kontak', function () {
    return view('bkk.kontak');
});

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/dashboard/berita/detail-berita{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');

Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
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

    Route::get('/dashboard/alumni', [AlumniController::class, 'dashboard'])->name('alumni.dashboard');
    Route::get('/dashboard/alumni/tambah', [AlumniController::class, 'create'])->name('alumni.tambah');
    Route::post('/dashboard/alumni/store', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('/dashboard/alumni/edit/{id}', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::put('/dashboard/alumni/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');
    Route::delete('/dashboard/alumni/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');

    Route::get('/dashboard/berita', [BeritaController::class, 'dashboard'])->name('berita.dashboard');
    Route::get('/dashboard/berita/tambah', [BeritaController::class, 'create'])->name('berita.tambah');
    Route::post('/dashboard/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/dashboard/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/dashboard/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/dashboard/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::get('/dashboard/galeri', [GaleriController::class, 'dashboard'])->name('galeri.dashboard');
    Route::get('/dashboard/galeri/tambah', [GaleriController::class, 'create'])->name('galeri.tambah');
    Route::post('/dashboard/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('/dashboard/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/dashboard/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/dashboard/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    Route::get('/dashboard/lamaran', [DashboardController::class, 'daftarPelamar'])->name('lamaran.dashboard');
});

Route::group(['middleware' => ['auth', 'checkRole:alumni']], function () {
    Route::get('/dashboard-alumni', [DashboardAlumniController::class, 'index'])->name('dashboardAlumni.index');
    Route::get('/dashboard-alumni/lowongan', [LowonganController::class, 'dashboardAlumni'])->name('dashboardAlumni.lowongan');
    Route::post('/lamar/{lowongan_id}', [LamaranController::class, 'store'])->name('lamar.store');
    Route::post('/batal-lamar/{lowongan_id}', [LamaranController::class, 'batal'])->name('lamar.batal');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
