<?php
include 'connect.php';
$id = $_GET['id']; // mengambil id
$get_data = "SELECT * FROM siswa WHERE id_siswa=$id"; // mengambil siswa byId
$result_data = mysqli_query($conn, $get_data); //menjalankan query
$siswa =  mysqli_fetch_assoc($result_data); //agar dapat data bisa di tamppilkan
$nama_siswa = $siswa['nama_siswa'];
$nisn = $siswa['nisn'];
$gender = $siswa['gender'];
$id_kelas = $siswa['id_kelas'];

//code for get by id kelas
$get_data_kelas = "SELECT * FROM kelas WHERE id=$id_kelas";
$result_data_kelas = mysqli_query($conn, $get_data_kelas);
$kelas = mysqli_fetch_assoc($result_data_kelas); //menampilkan/ mengambil data
$tingkat_kelas = $kelas['tingkat_kelas'];
$jurusan_kelas = $kelas['jurusan_kelas'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Mengimpor file CSS Bootstrap -->
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-75 m-auto p-3">
        <h3 class="text-center">Detail Siswa</h3>
        <div class="row mt-3">
            <div class="col-4">
                <span class="fw-bold">Nama Siswa</span>
            </div>
            <div class="col-8">
                <?php echo $nama_siswa ?>
            </div>
            <hr class="mt-3">
            <div class="col-4">
                <span class="fw-bold">NISN</span>
            </div>
            <div class="col-8">
                <?php echo $nisn ?>
            </div>
            <hr class="mt-3">
            <div class="col-4">
                <span class="fw-bold">Gender</span>
            </div>
            <div class="col-8">
                <?php echo $gender ?>
            </div>
            <hr class="mt-3">
            <div class="col-4">
                <span class="fw-bold">Kelas</span>
            </div>
            <div class="col-8">
                <?php echo $tingkat_kelas . ' ' . $jurusan_kelas ?>
            </div>
            <div class="col-12 mt-3 text-end">
                <a href="<?= 'update.php?id=' . $id;?>" class="btn btn-sm btn-primary">Update</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Mengimpor file JavaScript Bootstrap -->
</body>

</html>