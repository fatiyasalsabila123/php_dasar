<?php 
    $servername = "localhost";
    $port = 3306;
    $database = "db_sekolah";
    $username_db = "root";
    $password_db = "";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username_db, $password_db, $database, $port);

    // Memeriksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    } else {
        // Menyiapkan query SQL untuk insert data
        $stmt = $conn->prepare("INSERT INTO admin (email, username, password) VALUES (?, ?, ?)");

        // Mengikat parameter ke statement
        $stmt->bind_param("sss", $email, $username, md5($password));

        // Menjalankan query
        $stmt->execute();
        
        // Menampilkan pesan sukses
        echo "Register berhasil";
        
        // Menutup statement dan koneksi
        $stmt->close();
        $conn->close();
    }
?>
