<?php

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

Route::get('/home', function () {
    return view('home');
});

Route:: get('/profile', function () {
    return view('profile', [
        "nama" => "Nathania Salmadira Ramaadhani",
        "nohp" => "081234566",
        "foto" => "foto almet poster 1(2).jpg"
    ]);
});

Route:: get('/dosen', function () {
    return view('dosen');
});

Route:: get ('/mahasiswa', function () {
    return view ('mahasiswa');
});

Route:: get('/berita', function () {
    return view('berita');
});

Route:: get ('/contact', function () {
    return view ('contact');
});
