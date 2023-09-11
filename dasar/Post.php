<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <br>
  Umur: <input type="text" name="umur">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $umur = $_POST['umur'];
  if (empty($umur) && empty($name)) {
    echo "Isi inputan terlebih dahulu";
  } else {
    echo "nama saya $name <br> umur saya $umur";
  }
}
?>
</body>
</html>