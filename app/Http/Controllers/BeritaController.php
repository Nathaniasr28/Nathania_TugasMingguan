<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            'title' => 'Berita',
            'beritas' => Berita::ambildata()
        ]);
    }

    public function datatampil($slug)
    {
        $berita = Berita::caridata($slug);

        if (empty($berita)) {
            abort(404);
        }

        return view('singleberita', [
            'title' => $berita['judul'],
            'berita' => $berita
        ]);
    }
}