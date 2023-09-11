<?php 
    function salam($nama) {
        return "selamat datang $nama";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Php function</title>
</head>

<body>
    <h1><?= salam("fatiya");?></h1>
</body>

</html>