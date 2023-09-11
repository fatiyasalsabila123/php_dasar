<?php
session_start();
?>
<?php
$servername = "localhost:3306";
$database_name = "db_sekolah"; 
$username_db = "root";
$password_db = "";

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($conn->connect_error) {
    die("koneksi gagal : " . $conn->connect_error);
} else{
    $stmt = $conn-> prepare("select * from admin where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === md5($password)){
            $_SESSION["logged_in"] = true; 
            header("location: read.php"); 
            exit();
        } else{
            echo "<h2>email atau password salah</h2>";
        }
    } else{
        echo "<h2>email atau password salah</h2>";
    }
}
?>