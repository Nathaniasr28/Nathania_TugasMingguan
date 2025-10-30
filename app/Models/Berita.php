<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
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
        public static function ambildata()
        {
            return Self:: $data_berita;
        }

        public static function caridata ($slug)
        {
            $data_beritas = Self:: $data_berita;

            $new_berita = [];
        foreach($data_beritas as $berita)
        {
            if ($berita["slug"] === $slug)
            {
                $new_berita = $berita;
            }
        }

        return $new_berita;

        }
}
