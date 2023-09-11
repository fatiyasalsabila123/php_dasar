<?php
    // d = tanggal l = hari M = bulan m = bulan dalam bentuk angka Y = tahun
    // mktime (0, 0, 0, 0, 0, 0) => jam, menit, detik, bulan, tanggal, tahun 
    echo date ("l, d-M-Y", time() + 60*60*24*100);
    echo "<br>";
    echo date ("l", mktime(0,0,0,5,12,2006));
    echo "<br>";
    echo date("l", strtotime("12 may 2006"));
?>