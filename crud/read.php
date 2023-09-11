<?php
include 'connect.php'; // Mengimpor file connect.php yang digunakan untuk menghubungkan ke database.
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
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Read</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Alamat Sekolah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = "select * from sekolah"; // Query SQL untuk mengambil semua data dari tabel "sekolah".
                $result = mysqli_query($conn, $sql); // Menjalankan query SQL menggunakan koneksi yang telah dibuka sebelumnya.

                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) { // Mengambil setiap baris data sebagai asosiatif array.
                        $id = $data['id']; // Mengambil nilai kolom 'id' dari hasil query.
                        $nama_sekolah = $data['nama_sekolah']; // Mengambil nilai kolom 'nama_sekolah' dari hasil query.
                        $alamat_sekolah = $data['alamat_sekolah']; // Mengambil nilai kolom 'alamat_sekolah' dari hasil query.
                        echo '
                            <tr>
                                <td>' . $nama_sekolah . '</td>
                                <td>' . $alamat_sekolah . '</td>
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
    </div>

    <script>
        function hapus(id) { // Fungsi JavaScript untuk mengkonfirmasi dan mengarahkan ke halaman "delete.php" dengan id yang akan dihapus.
            var yes = confirm("Yakin Di Hapus?");
            if (yes == true) {
                window.location.href = "delete.php?id=" + id; // Mengarahkan ke halaman "delete.php" dengan mengirimkan id yang akan dihapus sebagai parameter.
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Mengimpor file JavaScript Bootstrap -->
</body>

</html>
