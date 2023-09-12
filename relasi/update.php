<?php
include 'connect.php';

$id = $_GET['id'];
$get_data = "SELECT * FROM siswa where id_siswa=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_siswa = $row['nama_siswa'];
$nisn = $row['nisn'];
$gender = $row['gender'];

if (isset($_POST['submit'])) {
    $input_nama_siswa = $_POST['nama'];
    $input_nisn = $_POST['nisn'];
    $input_gender = $_POST['gender'];
    $input_id_kelas = $_POST['kelas'];
    $sql = "update siswa set id_siswa=$id, nama_siswa='$input_nama_siswa', gender='$input_gender', nisn='$input_nisn',id_kelas='$input_id_kelas' WHERE id_siswa=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Jika berhasil, redirect ke halaman 'siswa.php'
        header("location:siswa.php");
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
    <title>Create Siswa</title>
    <!-- Mengimpor file CSS Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Create</h3>
        <form method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <!-- Input field untuk nama sekolah -->
                <input type="text" name="nama" class="form-control"  value="<?php echo $nama_siswa?>" id="nama">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <!-- Input field untuk nisn -->
                <input type="text" name="nisn" class="form-control" value="<?php echo $nisn?>" id="nisn">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <!-- Input field untuk gender -->
                <select name="gender" id="gender" class="form-select">
                    <option selected value="<?php echo $gender?>"><?php echo $gender?></option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" name="kelas" id="kelas">
                    <option selected>Pilih Kelas</option>
                    <?php
                    $sql = "SELECT * FROM kelas";
                    $result = mysqli_query($conn, $sql);
                    foreach ($result as $row) :
                    ?>
                        <option value="<?= $row['id'] ?>"> <?= $row['tingkat_kelas'] . ' ' . $row['jurusan_kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Mengimpor file JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>