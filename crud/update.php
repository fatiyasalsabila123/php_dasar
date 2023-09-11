<?php 
    // Mengimpor file 'connect.php' yang digunakan untuk koneksi ke database
    include 'connect.php';

    // Mengambil nilai 'id' dari parameter URL ($_GET) dan menyimpannya dalam variabel $id
    $id = $_GET['id'];

    // Membuat query SQL untuk mengambil data sekolah berdasarkan 'id' yang diberikan
    $get_data = "SELECT * FROM sekolah WHERE id=$id";

    // Menjalankan query SQL menggunakan mysqli_query() dan menyimpan hasilnya dalam $result_data
    $result_data = mysqli_query($conn, $get_data);

    // Mengambil satu baris data hasil query dan menyimpannya dalam bentuk array asosiatif ke variabel $row
    $row = mysqli_fetch_assoc($result_data);

    // Mengambil nilai 'nama_sekolah' dan 'alamat_sekolah' dari $row
    $nama_sekolah = $row['nama_sekolah'];
    $alamat_sekolah = $row['alamat_sekolah'];

    // Memeriksa apakah form telah disubmit (tombol "Submit" ditekan)
    if (isset($_POST['submit'])) {
        // Mengambil nilai 'nama' dan 'alamat' dari input form
        $nama_sekolah = $_POST['nama'];
        $alamat_sekolah = $_POST['alamat'];

        // Membuat query SQL untuk mengupdate data sekolah berdasarkan 'id' yang diberikan
        $sql = "UPDATE sekolah SET id=$id, nama_sekolah='$nama_sekolah', alamat_sekolah='$alamat_sekolah' WHERE id=$id";

        // Menjalankan query SQL update menggunakan mysqli_query() dan menyimpan hasilnya dalam $result
        $result = mysqli_query($conn, $sql);

        // Memeriksa apakah query update berhasil
        if ($result) {
            // Jika berhasil, redirect ke halaman 'read.php'
            header("location:read.php");
        } else {
            // Jika gagal, tampilkan pesan kesalahan dan akhiri skrip
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
        <h3 class="text-center">Update</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Sekolah</label>
                <!-- Input field untuk nama sekolah dengan nilai awal dari variabel $nama_sekolah -->
                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama_sekolah?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sekolah</label>
                <!-- Input field untuk alamat sekolah dengan nilai awal dari variabel $alamat_sekolah -->
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $alamat_sekolah?>">
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Mengimpor file JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
