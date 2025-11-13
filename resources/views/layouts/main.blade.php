<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Website Teknologi Informasi' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f6fa;">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #18436b;">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">Teknologi Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item"><a class="nav-link text-white" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/profile">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/dosen">Dosen</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/mahasiswa">Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <div class="container mt-5 mb-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
