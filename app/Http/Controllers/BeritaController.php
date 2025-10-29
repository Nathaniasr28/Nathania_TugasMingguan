<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view(view: 'berita', data: [
            title =>"Berita",
            "beritas" => \App\Models\Berita::ambildata()
        ]);
    }

    // Menampilkan detail berita berdasarkan slug
    public function show($slug)
    {



    }
}
