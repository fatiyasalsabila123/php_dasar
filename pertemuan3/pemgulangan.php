<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP Pengulangan</title>
    <style>
        .warna-baris {
            background-color: silver;
        }

        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j" ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>

    </table>
    <?php
    $angka = [1, 3, 5, 22, 43, 6];
    ?>
    <!-- count() adalah untuk menghitung secara otomtis jumlah element pada array -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="box"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    <div class="clear"></div>
    <?php foreach ($angka as $a) : ?>
        <div class="box"><?= $a; ?></div>
    <?php endforeach ?>

    <div class="clear"></div>

    <?php
    $angka1 = [[1, 2, 3], [3, 4, 5], [6, 7, 8]];
    echo $angka1[1][1];
    ?>
    <div class="clear"></div>
    <?php foreach ($angka1 as $a1) : ?>
        <?php foreach ($a1 as $a2) : ?>
            <div class="box"><?= $a2; ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>

</body>

</html>