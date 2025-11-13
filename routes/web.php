<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/home', function () {
    return view('home');
});

// Halaman Profil
Route::get('/profile', function () {
    return view('profile');
});

// Halaman Dosen
Route::get('/dosen', function () {
    return view('dosen');
});

// Halaman Mahasiswa
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

// Halaman Kontak
Route::get('/contact', function () {
    return view('contact');
});

// Halaman daftar berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'datatampil']);

// Mahasiswa Controller
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

// ✅ Tambahan route untuk proses simpan data form
Route::post('/mahasiswa/store', [MahasiswaController::class, 'insertdata'])->name('mahasiswa.store');
