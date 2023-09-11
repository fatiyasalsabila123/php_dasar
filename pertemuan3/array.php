<!-- var_dump() dan print_r() => untuk menampilkan array -->
<?php 
    $hari = ["januari", "februari", "maret"];
    $arr = [123, "tulisan", false];

    var_dump($hari);
    echo "<br>";
    print_r($arr);

    // menampilkan satu element pada array
    echo $hari[0];
    echo "<br>";
    echo $arr[2];

    //menambah element baru pada array
    var_dump($hari);
    $hari[] = "kamis";
    $hari[] = "jumat";
    echo "<br>";
    var_dump($hari);
    
?>