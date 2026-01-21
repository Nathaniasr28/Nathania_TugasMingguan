<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita dan Informasi</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        /* Navbar exactly like mahasiswa page */
        .navbar {
            background-color: #3d6480;
            padding: 10px 0;
            text-align: center;
        }
        .navbar a {
            color: white;
            margin: 0 20px;
            text-decoration: none;
            font-weight: 600;
        }
        .navbar a:hover,
        .navbar a.active {
            text-decoration: underline;
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }
        /* Page header below navbar */
        .page-header { text-align:center; margin-top:18px; }
        .page-header h1 { margin:0; font-size:28px; color:#0A3D62; }
        .page-header p { margin:4px 0 0; color:#6b7280; }
        .berita {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        .berita h2 {
            color: #0A3D62;
            margin-top: 0;
        }
        .berita p {
            color: #555;
            line-height: 1.6;
        }
        .tanggal {
            font-size: 13px;
            color: gray;
            margin-bottom: 10px;
        }
        a.baca-selengkapnya {
            display: inline-block;
            margin-top: 10px;
            color: #0A3D62;
            text-decoration: none;
            font-weight: bold;
        }
        a.baca-selengkapnya:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #0A3D62;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a class="brand" href="/home">UNIMUS TI</a>
        </div>
        <div class="nav-right">
            <a href="/home" class="nav-btn">Home</a>
            <a href="/berita" class="nav-btn active">Berita</a>
            <a href="/mahasiswa" class="nav-btn">Mahasiswa</a>
            <a href="/dosen" class="nav-btn">Dosen</a>
            <a href="/contact" class="nav-btn">Kontak</a>
            <a href="{{ route('login') }}" class="nav-btn">Login</a>
        </div>
    </nav>

    <header class="page-header">
        <h1>Berita dan Informasi</h1>
        <p>Universitas Muhammadiyah Semarang</p>
    </header>

    <main>

        <div class="berita">
            <h2>OPEN HOUSE HMTI 2026</h2>
            <p class="tanggal">Dipublikasikan: 2 Januari 2026</p>
            <p>acara yang diadakan oleh Himpunan Mahasiswa Teknologi Informasi...</p>
            <a href="/berita/hackathon-2025" class="baca-selengkapnya">Baca selengkapnya...</a>
        </div>

        <div class="berita">
            <h2>Pelatihan Cyber Security untuk Mahasiswa Baru</h2>
            <p class="tanggal">Dipublikasikan: 28 September 2025</p>
            <p>Program Studi TI mengadakan pelatihan dasar keamanan siber bagi mahasiswa baru...</p>
            <a href="/berita/pelatihan-cybersecurity" class="baca-selengkapnya">Baca selengkapnya...</a>
        </div>
    </main>

    <footer>
        <p>&copy 2026 Program Studi Teknologi Informasi | Universitas Muhammadiyah Semarang</p>
    </footer>
</body>
</html>
