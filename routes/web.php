<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Root -> redirect to /home so visiting / shows the home page
Route::get('/', function () {
    return redirect('/home');
});

// Also accept GET /logout to support simple logout links (redirects to /home)
Route::get('/logout', [AuthController::class, 'logout']);

// Public pages
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

// Halaman Mahasiswa (listing public)
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tampildata/{id}', [MahasiswaController::class, 'index'])->name('tampildata');

// Halaman Kontak
Route::get('/contact', function () {
    return view('contact');
});

// Berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'datatampil']);

// Mahasiswa actions that require auth
Route::middleware('auth')->group(function () {
    Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'insertdata'])->name('mahasiswa.store');

    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

    Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');
});
