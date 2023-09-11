<?php
$mahasiswa = [
    ["fatiya salsabila", "048238347", "teknik informatika", "fatiyasalsabila82@gmail.com"],
    ["mahasiswa 2", "0482383009", "teknik industri", "mahasiswa2@gmail.com"]
];

$mahasiswa1 = [
    [
        "nama" => "fatiya salsabila",
        "nrp" => "0046832001",
        "jurusan" => "teknik komputer",
        "email" => "fatiyasalsabila83@gmail.com",
        "gambar" => "profile2.jpg"
    ],
    [
        "nama" => "mahasiswa 2",
        "nrp" => "0046832089",
        "jurusan" => "teknik industri",
        "email" => "mahasiswa2@gmail.com",
        "tugas" => [80, 100, 90],
        "gambar" => "profile2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<style>
    img {
        width: 20%;
    }
</style>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

    <?php foreach ($mahasiswa1 as $mhs1) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs1["gambar"]; ?>" alt="<?= $mhs1["nama"]; ?>">
            </li>
            <li>Nama : <?= $mhs1["nama"]; ?></li>
            <li>NRP : <?= $mhs1["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs1["jurusan"]; ?></li>
            <li>Email : <?= $mhs1["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
