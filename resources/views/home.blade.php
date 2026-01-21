<?php
// home.php
// Contoh halaman home sederhana dengan PHP + HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI UNIMUS HOME</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        header {
            background: #0A3D62;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background: #3C6382;
            padding: 10px;
            text-align: center;
        }
        nav a, nav .nav-link, nav button.nav-link {
            color: white;
            margin: 0 12px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            padding: 8px 14px;
            border-radius: 4px;
        }
        nav a:hover, nav button.nav-link:hover {
            background: rgba(255,255,255,0.06);
            text-decoration: none;
        }
        main {
            padding: 20px;
            background: white;
            margin: 20px auto;
            width: 80%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        footer {
            background: #0A3D62;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        /* logout button inside nav should look like links */
        nav form.logout-form { display:inline; }
        .btn-logout { background:transparent; border:none; color:white; font-weight:600; cursor:pointer; padding:8px 14px; border-radius:4px; }
    </style>
</head>
<body>

    <header style="position:relative;">
        <h1>Selamat Datang di TI UNIMUS</h1>
        <p>Website Teknologi Informasi | Nathania Salmadira Ramadhani</p>

        <!-- auth nav removed from header; auth link will appear inside main nav -->
    </header>

    <nav>
        <a href="/home" class="nav-link">Home</a>
        <a href="/profile" class="nav-link">Profil</a>
        <a href="/berita" class="nav-link">Berita</a>
        <a href="/dosen" class="nav-link">Dosen</a>
        <a href="/mahasiswa" class="nav-link">Mahasiswa</a>
        <a href="/contact" class="nav-link">Kontak</a>

        @auth
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="nav-link btn-logout">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link">Login</a>
        @endauth
    </nav>

    <main>
        <?php
        // contoh penggunaan PHP
        $nama = "Pengunjung";
        $tanggal = date("d F Y");
        echo "<h2>Halo, $nama!</h2>";
        echo "<p>Hari ini tanggal $tanggal.</p>";
        ?>
        <p>Program Studi Teknologi Informasi Universitas Muhammadiyah Semarang (UNIMUS) berkomitmen mencetak lulusan unggul dalam teknologi informasi.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> TI UNIMUS. All Rights Reserved.</p>
    </footer>

</body>
</html>
