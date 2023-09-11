<?php
    // Mengimpor file connect.php yang berisi konfigurasi koneksi database
    include 'connect.php';

    // Memeriksa apakah tombol "submit" telah ditekan pada formulir HTML
    if (isset($_POST['submit'])) {
        // Mengambil data yang diinputkan oleh pengguna dari formulir
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $kelas = $_POST['kelas'];
        $hobi = $_POST['hobi'];
        $makanan_kesukaan = $_POST['makanan_kesukaan'];

        // Membuat SQL query untuk memasukkan data sekolah ke dalam tabel "sekolah"
        $sql = "INSERT INTO data_diri(nama, umur, kelas, hobi, makanan_kesukaan) VALUES ('$nama', '$umur', '$kelas', '$hobi', '$makanan_kesukaan')";

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
<?php
session_start();
// Periksa apakah sesi 'logged_in' telah ditetapkan dan bernilai true
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Jika tidak, alihkan pengguna kembali ke halaman login
    header("Location: login.php");
    exit; // Hentikan eksekusi skrip
}
?>
<?php 
    include 'connect.php';
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
<style>
   .card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    background: #F0F0F0;
    border: none;
   }
   h3 {
    background-color: #0D6EFD;
    border-radius: 20px;
    color: white;
   }
</style>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-75 m-auto p-3">
        <h3 class="text-center">Create</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <!-- Input field untuk nama sekolah -->
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <!-- Input field untuk umur sekolah -->
                <input type="text" name="umur" class="form-control" id="umur">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <!-- Input field untuk kelas sekolah -->
                <input type="text" name="kelas" class="form-control" id="kelas">
            </div>
            <div class="mb-3">
                <label for="hobi" class="form-label">Hobi</label>
                <!-- Input field untuk hobi sekolah -->
                <input type="text" name="hobi" class="form-control" id="hobi">
            </div>
            <div class="mb-3">
                <label for="makanan_kesukaan" class="form-label">makanan_kesukaan</label>
                <!-- Input field untuk makanan_kesukaan sekolah -->
                <input type="text" name="makanan_kesukaan" class="form-control" id="makanan_kesukaan">
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Mengimpor file JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
