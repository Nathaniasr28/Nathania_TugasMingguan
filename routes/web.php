<?php

use App\Models\Berita;

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
        "nama" => "Nathania Salmadira Ramadhani",
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

Route:: get('/berita/{slug}', function ($slugp) {

    $data_berita = [
        [
            "judul" => "Unimus Jaya",
            "slug" => "unimus-jaya",
            "penulis" => "Nathaniasall",
            "konten" => "Unimus Bergembira",
        ],
        [
            "judul" => "Berita Terkini",
            "slug" => "berita-terkini",
            "penulis" => "Salmadirarr",
            "konten" => "Seorang mahaasiswa Unimus prodi teknologi informasi berhasil meraih kejuaraan di POM tahun 2025"
        ],
    ];

    $new_berita = [];
    foreach($data_berita as $berita)
    {
        if($berita["slug"] === $slugp)
        {
            $new_berita = $berita;
        }
    } 

    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => $new_berita,
    ]);
});

Route:: get ('/contact', function () {
    return view ('contact');
});
