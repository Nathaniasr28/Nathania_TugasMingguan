<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        /* Navbar */
        nav {
            background-color: #3d6480;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 20px;
            text-decoration: none;
            font-weight: 600;
        }
        nav a:hover,
        nav a.active {
            text-decoration: underline;
        }

        /* Konten */
        .content {
            width: 85%;
            max-width: 1100px;
            margin: 30px auto;
            background-color: #fff;
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
        }

        table th, table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn {
            padding: 5px 12px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-success {
            background-color: #198754;
            border: none;
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    <nav>
        <a href="/home">Home</a>
        <a href="/profile">Profil</a>
        <a href="/berita">Berita</a>
        <a href="/dosen">Dosen</a>
        <a href="/mahasiswa" class="active">Mahasiswa</a>
        <a href="/contact">Kontak</a>
    </nav>
    <div class="content">
        <h2 class="text-center fw-bold mb-4">Data Mahasiswa</h2>

        <div class="mb-3 text-start">
            <a href="/tambahmahasiswa" class="btn btn-success">Tambah Mahasiswa</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $mahasiswa)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $mahasiswa["name"] }}</td>
                    <td>{{ $mahasiswa["nim"] }}</td>
                    <td>{{ $mahasiswa["prodi"] }}</td>
                    <td>{{ $mahasiswa["email"] }}</td>
                    <td>{{ $mahasiswa["nohp"] }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $mahasiswa->id }}" class="btn btn-primary btn-sm">EDIT</a>
                        <button class="btn btn-danger btn-sm">HAPUS</button>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
