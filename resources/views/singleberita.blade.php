<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
</head>
<body>
    <h1>{{ $berita['judul'] }}</h1>
    <p><em>{{ $berita['tanggal'] }} - {{ $berita['penulis'] }}</em></p>
    <p>{{ $berita['isi'] }}</p>
    <a href="/berita">← Kembali ke daftar berita</a>
</body>
</html>
