<?php 
    $servername = "localhost";  // Hanya menyebutkan host, tanpa port
    $database_name = "db_sekolah";
    $username_db = "root";
    $password_db = "";

    // Membuat koneksi ke MySQL
    $conn = new mysqli($servername, $username_db, $password_db, $database_name);

    // Memeriksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi gagal: " .  $conn->connect_error);
    }
?>
