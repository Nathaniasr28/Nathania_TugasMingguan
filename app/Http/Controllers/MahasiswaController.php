<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa', [
            'title' => 'Data Mahasiswa',
            'data' => $data
        ]);
    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa', [
            'title' => 'Tambah Data Mahasiswa'
        ]);
    }

    public function insertdata(Request $request)
    {
        Mahasiswa::create($request->all());
        
        return redirect()->route('mahasiswa')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('editdata', [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diupdate');
    }
}
