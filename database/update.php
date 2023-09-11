<?php
// Mengimpor file 'connect.php' yang digunakan untuk koneksi ke database
include 'connect.php';

// Mengambil nilai 'id' dari parameter URL ($_GET) dan menyimpannya dalam variabel $id
$id = $_GET['id'];

// Membuat query SQL untuk mengambil data sekolah berdasarkan 'id' yang diberikan
$get_data = "SELECT * FROM data_diri WHERE id=$id";

// Menjalankan query SQL menggunakan mysqli_query() dan menyimpan hasilnya dalam $result_data
$result_data = mysqli_query($conn, $get_data);

// Mengambil satu baris data hasil query dan menyimpannya dalam bentuk array asosiatif ke variabel $row
$row = mysqli_fetch_assoc($result_data);

// Mengambil nilai 'nama', 'umur', 'kelas', 'hobi', dan 'makanan_kesukaan' dari $row
$nama = $row['nama'];
$umur = $row['umur'];
$kelas = $row['kelas'];
$hobi = $row['hobi'];
$makanan_kesukaan = $row['makanan_kesukaan'];

// Memeriksa apakah form telah disubmit (tombol "Submit" ditekan)
if (isset($_POST['submit'])) {
    // Mengambil nilai 'nama', 'umur', 'kelas', 'hobi', dan 'makanan_kesukaan' dari input form
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kelas = $_POST['kelas'];
    $hobi = $_POST['hobi'];
    $makanan_kesukaan = $_POST['makanan_kesukaan'];

    // Membuat query SQL untuk mengupdate data sekolah berdasarkan 'id' yang diberikan
    $sql = "UPDATE data_diri SET nama='$nama', umur='$umur', kelas='$kelas', hobi='$hobi', makanan_kesukaan='$makanan_kesukaan' WHERE id=$id";

    // Menjalankan query SQL update menggunakan mysqli_query() dan menyimpan hasilnya dalam $result
    $result = mysqli_query($conn, $sql);

    // Memeriksa apakah query update berhasil
    if ($result) {
        // Jika berhasil, redirect ke halaman 'read.php'
        header("location:read.php");
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Error: " . mysqli_error($conn);
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
    <title>Update Data Diri</title>
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
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Update Data Diri</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <!-- Input field untuk nama dengan nilai awal dari variabel $nama -->
                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama ?>">
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <!-- Input field untuk umur dengan nilai awal dari variabel $umur -->
                <input type="text" name="umur" class="form-control" id="umur" value="<?php echo $umur ?>">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <!-- Input field untuk kelas dengan nilai awal dari variabel $kelas -->
                <input type="text" name="kelas" class="form-control" id="kelas" value="<?php echo $kelas ?>">
            </div>
            <div class="mb-3">
                <label for="hobi" class="form-label">Hobi</label>
                <input type="text" name="hobi" class="form-control" id="hobi" value="<?php echo $hobi?>">
            </div>
            <div class="mb-3">
                <label for="makanan_kesukaan" class="form-label">makanan_kesukaan</label>
                <input type="text" name="makanan_kesukaan" class="form-control" id="makanan_kesukaan" value="<?php echo $makanan_kesukaan?>">
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Mengimpor file JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>