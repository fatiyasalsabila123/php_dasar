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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Mengimpor file CSS Bootstrap -->
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
   table {
    padding: 10px;
   }
   .button-add {
    width: fit-content;
    /* padding: 10px; */
    margin-left: 95.5%;
    margin-bottom: 10px;
   }
   .logout {
    width: 100px;
    margin-left: auto;
   }
   thead {
    background: #0D6EFD;
   }
   
</style>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-75 m-auto p-3">
        <h3 class="text-center">Read Data Diri</h3>
       <a href="../database/create.php"><button class="btn btn-sm button-add btn-primary">Add</button></a>
        <!-- <br> -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Hobi</th>
                    <th scope="col">Makanan Kesukaan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = "select * from data_diri"; // Query SQL untuk mengambil semua data dari tabel "sekolah".
                $result = mysqli_query($conn, $sql); // Menjalankan query SQL menggunakan koneksi yang telah dibuka sebelumnya.

                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) { // Mengambil setiap baris data sebagai asosiatif array.
                        $id = $data["id"]; // Mengambil nilai kolom 'id' dari hasil query.
                        $nama = $data["nama"]; // Mengambil nilai kolom 'nama_sekolah' dari hasil query.
                        $umur = $data["umur"]; // Mengambil nilai kolom 'alamat_sekolah' dari hasil query.
                        $kelas = $data["kelas"];
                        $hobi = $data["hobi"];
                        $makanan_kesukaan = $data["makanan_kesukaan"];
                        echo '
                            <tr>
                                <td>' . $nama. '</td>
                                <td>' . $umur . '</td>
                                <td>' . $kelas . '</td>
                                <td>' . $hobi . '</td>
                                <td>' . $makanan_kesukaan . '</td>
                                <td>
                                    <a href="update.php?id=' . $id . '" class="btn btn-sm btn-primary">Update</a>
                                    <button onClick="hapus(' . $id . ')" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        ';
                    }
                }
                ?>
            </tbody>
        </table>
        <button class="btn btn-sm btn-danger logout" onclick="logout()">Logout</button>
    </div>

    <script>
        function hapus(id) { // Fungsi JavaScript untuk mengkonfirmasi dan mengarahkan ke halaman "delete.php" dengan id yang akan dihapus.
            var yes = confirm("Yakin Di Hapus?");
            if (yes == true) {
                window.location.href = "delete.php?id=" + id; // Mengarahkan ke halaman "delete.php" dengan mengirimkan id yang akan dihapus sebagai parameter.
            }
        }
        function logout(id) { // Fungsi JavaScript untuk mengkonfirmasi dan mengarahkan ke halaman "delete.php" dengan id yang akan dihapus.
            var yes = confirm("Yakin Di Hapus?");
            if (yes == true) {
                window.location.href = "logout.php?id=" + id; // Mengarahkan ke halaman "delete.php" dengan mengirimkan id yang akan dihapus sebagai parameter.
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Mengimpor file JavaScript Bootstrap -->
</body>

</html>