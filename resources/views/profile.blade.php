<?php
// mahasiswa.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - TI UNIMUS</title>
</head>
<body>

    <h1>Profil Mahasiswa</h1>

    <?php
    // contoh data mahasiswa (bisa diambil dari database nantinya)
    $mahasiswa = [
        "nama" => "Nathania Salmadira Ramadhani",
        "nim" => "13242420036",
        "email" => "nathania@example.com"
    ];

    echo "<p><b>Nama:</b> " . $mahasiswa["nama"] . "</p>";
    echo "<p><b>NIM:</b> " . $mahasiswa["nim"] . "</p>";
    echo "<p><b>Kelas:</b> " . $mahasiswa["kelas"] . "</p>";
    echo "<p><b>Email:</b> " . $mahasiswa["email"] . "</p>";
    ?>

    <p><a href="home.php">Kembali ke Home</a></p>

</body>
</html>
