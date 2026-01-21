<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        /* Navbar like mahasiswa */
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

        header {
            color: #0A3D62;
            text-align: center;
            padding: 10px 0 0;
        }
        main {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            line-height: 1.7;
            color: #555;
        }
        form {
            margin-top: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #0A3D62;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0A3D62;
        }
        footer {
            text-align: center;
            padding: 15px;
            background-color: #0A3D62;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/home">Home</a>
        <a href="/profile">Profil</a>
        <a href="/berita">Berita</a>
        <a href="/dosen">Dosen</a>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href="/contact" class="active">Kontak</a>
    </nav>

    <header>
        <h1>Kontak</h1>
        <p>Hubungi Kami</p>
    </header>

    <main>
        <p>Jika memiliki pertanyaan, saran, atau ingin bekerja sama, silakan hubungi kami melalui kontak yang tertera.</p>

        <h3>Informasi Kontak</h3>
        <p><strong>Email:</strong> nathaniasr@gmail.com </p>
        <p><strong>Telepon:</strong> +6288238120250</p>
        <p><strong>Alamat:</strong> Jl. Soekarno Hatta No. 123, Semarang, Indonesia</p>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Portal Berita Teknologi | Dibuat oleh Mahasiswa TI</p>
    </footer>
</body>
</html>
