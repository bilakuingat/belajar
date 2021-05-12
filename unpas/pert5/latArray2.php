<?php
$angka = [3, 2, 1, 44, 13, 12, 92, 78, 27];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .kotak {
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
        <!-- cara1 -->
        <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
        <?php endfor; ?>

        <!-- cara 2 -->
        <div class="clear"></div>
        <?php foreach ($angka as $elemenAngka) : ?>
        <div class="kotak"><?php echo $elemenAngka; ?></div>
        <?php endforeach; ?>
    </body>

</html>
