<?php
    // Mengimpor file connect.php yang berisi konfigurasi koneksi database
    include 'connect.php';

    // Memeriksa apakah tombol "submit" telah ditekan pada formulir HTML
    if (isset($_POST['submit'])) {
        // Mengambil data yang diinputkan oleh pengguna dari formulir
        $nama_sekolah = $_POST['nama'];
        $alamat_sekolah = $_POST['alamat'];

        // Membuat SQL query untuk memasukkan data sekolah ke dalam tabel "sekolah"
        $sql = "INSERT INTO sekolah(nama_sekolah, alamat_sekolah) VALUES ('$nama_sekolah', '$alamat_sekolah')";

        // Mengeksekusi query menggunakan objek koneksi $conn
        $result = mysqli_query($conn, $sql);

        // Memeriksa apakah query berhasil dieksekusi
        if ($result) {
            // Jika berhasil, redirect ke halaman "read.php"
            header('location:read.php');
        } else {
            // Jika terjadi kesalahan, tampilkan pesan kesalahan
            die($conn->$connect_error);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Mengimpor file CSS Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Create</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Sekolah</label>
                <!-- Input field untuk nama sekolah -->
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sekolah</label>
                <!-- Input field untuk alamat sekolah -->
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Mengimpor file JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
