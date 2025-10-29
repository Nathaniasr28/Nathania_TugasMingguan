<?php

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
Route::get('/berita', function () {
    return view('berita');
});

// Halaman detail berita (pakai slug)
Route::get('/berita/{slug}', function ($slug) {
    // Daftar berita (slug harus sama dengan yang kamu tulis di href di berita.blade.php)
    $data_berita = [
        [
            "judul" => "Cara Belajar Laravel bagi Pemula",
            "slug" => "cara-belajar-laravel",
            "penulis" => "Tim Redaksi Teknologi",
            "tanggal" => "5 Oktober 2025",
            "isi" => "Laravel merupakan salah satu framework PHP populer. Artikel ini membahas langkah-langkah belajar Laravel bagi pemula..."
        ],
        [
            "judul" => "Mahasiswa TI UNIMUS Menang Kompetisi Hackathon 2025",
            "slug" => "hackathon-2025",
            "penulis" => "Admin TI",
            "tanggal" => "2 Oktober 2025",
            "isi" => "Tim mahasiswa Prodi TI UNIMUS berhasil meraih juara 1 dalam ajang Hackathon Nasional 2025..."
        ],
        [
            "judul" => "Pelatihan Cyber Security untuk Mahasiswa Baru",
            "slug" => "pelatihan-cybersecurity",
            "penulis" => "Admin TI",
            "tanggal" => "28 September 2025",
            "isi" => "Program Studi TI mengadakan pelatihan dasar keamanan siber bagi mahasiswa baru..."
        ],
        [
            "judul" => "Workshop UI/UX Design Bersama Praktisi Industri",
            "slug" => "workshop-uiux",
            "penulis" => "Tim Redaksi",
            "tanggal" => "25 September 2025",
            "isi" => "Peserta diajak langsung mempraktikkan pembuatan desain antarmuka aplikasi yang menarik..."
        ]
    ];

    // Cari berita sesuai slug
    $berita = collect($data_berita)->firstWhere('slug', $slug);

    // Kalau gak ketemu, munculkan error 404
    if (!$berita) {
        abort(404);
    }

    // Kirim data berita ke halaman singleberita.blade.php
    return view('singleberita', ['berita' => $berita]);
});
