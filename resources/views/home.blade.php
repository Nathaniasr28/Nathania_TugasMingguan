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
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
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
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di TI UNIMUS</h1>
        <p>Website Resmi Teknologi Informasi</p>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="profil.php">Profil</a>
        <a href="dosen.php">Dosen</a>
        <a href="mahasiswa.php">Mahasiswa</a>
        <a href="kontak.php">Kontak</a>
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
