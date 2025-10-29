<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => 'jokowi',
            'nim' => 12345678,
            'prodi' => 'Teknologi Informasi',
            'email' => "jokowi@gmail.com",
            'nohp' => 62812578,
        ]);
    }
}
