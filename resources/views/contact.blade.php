<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4a90e2;
            color: white;
            text-align: center;
            padding: 20px 0;
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
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #357abd;
        }
        footer {
            text-align: center;
            padding: 15px;
            background-color: #4a90e2;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Portal Berita Teknologi</h1>
        <p>Hubungi Kami</p>
    </header>

    <main>
        <h2>Kontak Kami</h2>
        <p>Jika kamu memiliki pertanyaan, saran, atau ingin bekerja sama, silakan hubungi kami melalui form di bawah ini atau lewat kontak yang tertera.</p>

        <form action="#" method="POST">
            @csrf
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" placeholder="Masukkan nama kamu" required>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Masukkan email kamu" required>

            <label>Pesan:</label>
            <textarea name="pesan" rows="5" placeholder="Tulis pesan kamu di sini..." required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>

        <hr style="margin: 30px 0;">

        <h3>Informasi Kontak</h3>
        <p><strong>Email:</strong> tiunimus@gmail.com</p>
        <p><strong>Telepon:</strong> +62 1234567890</p>
        <p><strong>Alamat:</strong> Jl. Soekarno Hatta No. 123, Semarang, Indonesia</p>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Portal Berita Teknologi | Dibuat oleh Mahasiswa TI</p>
    </footer>
</body>
</html>
