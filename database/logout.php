<?php
session_start();
if (empty($_SESSION["login"])) {
    header("loation:login.php");
}
?>
<?php
session_start();
session_destroy();
$_SESSION["login"] = "Berhasil Logout";
header("location:login.php");
?>