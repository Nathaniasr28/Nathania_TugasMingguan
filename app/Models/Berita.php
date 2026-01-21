<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "OPEN HOUSE HMTI 2026",
            "slug" => "hackathon-2025",
            "penulis" => "Admin TI",
            "tanggal" => "2 Oktober 2025",
            "isi" => "acara yang diadakan oleh Himpunan Mahasiswa Teknologi Informasi, untuk memperkenalkan diri, program kerja, dan departemen-departemennya kepada mahasiswa baru 2025. Open House ini bertujuan merekrut anggota baru, membangun kebersamaan, dan menunjukkan kegiatan mereka melalui
            presentasi, sesi tanya jawab, dan kegiatan interaktif, yang akan dilaksanakan pada tanggal 10 Januari 2026."
        ],

        [
            "judul" => "Pelatihan Cyber Security untuk Mahasiswa Baru",
            "slug" => "pelatihan-cybersecurity",
            "penulis" => "Admin TI",
            "tanggal" => "28 September 2025",
            "isi" => "Program Studi TI mengadakan pelatihan dasar keamanan siber bagi mahasiswa baru.
            Berikut adalah poin-poin penting yang umumnya dicakup dalam pelatihan dasar tersebut:
1. Kesadaran Keamanan Siber Dasar (Cybersecurity Awareness)
2. Pengamanan Perangkat dan Akun
3. Etika dan Hukum: Pelatihan juga memberikan pemahaman tentang etika keamanan siber dan masalah hukum yang terkait dengan kejahatan digital."
        ],


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
