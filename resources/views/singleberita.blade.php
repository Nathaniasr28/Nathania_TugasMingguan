<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f9f9fb; color:#222; padding:24px; }
        .container { max-width:800px; margin:0 auto; background:white; padding:24px; border-radius:8px; box-shadow:0 6px 20px rgba(0,0,0,0.05); }
        h1 { color:#0A3D62; }
        .meta { color:#6b7280; margin-bottom:18px; }
        .content { line-height:1.8; margin-bottom:22px; }
        /* Match Mahasiswa navbar/button theme */
        .btn { display:inline-block; padding:8px 14px; background:#3d6480; color:#fff; border-radius:6px; text-decoration:none; border:none; cursor:pointer; font-weight:600; }
        .btn:hover { background:#335466; }
        .btn.secondary { background:transparent; color:#3d6480; border:1px solid #3d6480; margin-right:8px; font-weight:600; }
        .actions { margin-top:18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $berita['judul'] }}</h1>
        <p class="meta"><em>{{ $berita['tanggal'] }} - {{ $berita['penulis'] }}</em></p>
        <div class="content">{!! nl2br(e($berita['isi'])) !!}</div>

        <div class="actions">
            <a href="/berita" class="btn secondary">← Kembali ke daftar berita</a>
            <a href="/home" class="btn">Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
