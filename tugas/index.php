<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name">
        <br>
        <br>
        Umur: <input type="text" name="umur">
        <br>
        <br>
        Gender: <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan
        <br>
        Makanan Kesukaan : <input type="checkbox" name="makanan[]" value="bakso">bakso
        <input type="checkbox" name="makanan[]" value="soto">soto
        <input type="checkbox" name="makanan[]" value="mie ayam">mie ayam<br>
        <br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $umur = $_POST['umur'];
        $makananKesukaan = $_POST['makanan'];
        $gender = $_POST['jenis_kelamin'];
        if (empty($umur) && empty($name)) {
            echo "Isi inputan terlebih dahulu";
        } else {
            $N = count($makananKesukaan);
            echo "nama saya $name <br> umur saya $umur <br> Gender saya $gender <br> makanan kesukaan saya ";
            for ($i = 0; $i < $N; $i++) {
                echo ($makananKesukaan[$i] . " ");
            }
        }
    }
    ?>
</body>

</html>