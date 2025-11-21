@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Tambah Data Mahasiswa</h1>

    <form action="/mahasiswa/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Nomor Induk (NIM)</label>
            <input type="number" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" required>
        </div>

        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Jurusan" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required>
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor Telepon" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
