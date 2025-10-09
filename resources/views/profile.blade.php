<?php
// mahasiswa.php
$mahasiswa = [
    "nama"   => "Nathania Salmadira Ramadhani",
    "nim"    => "13242420036",
    "email"  => "nathania@example.com",
    "foto"   => "img/joko.webp" // foto placeholder
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
            padding: 20px;
        }
        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #0A3D62;
            margin-bottom: 15px;
        }
        .card h2 {
            margin: 10px 0 5px;
            color: #0A3D62;
        }
        .card p {
            margin: 5px 0;
            color: #333;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #0A3D62;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn:hover {
            background: #3C6382;
        }
    </style>
</head>
<body>

    <div class="card">
        <img src="<?php echo $mahasiswa['foto']; ?>" alt="Foto Mahasiswa">
        <h2><?php echo $mahasiswa['nama']; ?></h2>
        <p><b>NIM:</b> <?php echo $mahasiswa['nim']; ?></p>
        <p><b>Email:</b> <?php echo $mahasiswa['email']; ?></p>
        <a href="/home" class="btn">Kembali ke Home</a>
    </div>

</body>
</html>
