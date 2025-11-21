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

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'datatampil']);

// Mahasiswa Controller
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

Route::get('/tampildata/{id}', [MahasiswaController::class, 'index'])->name('tampildata');
Route::get('/editdata/{id}', [MahasiswaController::class, 'tambahmahasiswa'])->name('editdata');

Route::post('/mahasiswa/store', [MahasiswaController::class, 'insertdata'])->name('mahasiswa.store');


Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
