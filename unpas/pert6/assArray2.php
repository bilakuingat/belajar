<?php
// * array numerik
$mahasiswa = [
    ["Rafi", "1029", "SI"],
    ["gilang", "1010", "TI"],
    ["panjul", "1210", "IF"]
];



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h1>mahasiswa</h1>

        <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>nama:<?php echo $m[0]; ?></li>
            <li>NIM:<?php echo $m[1]; ?></li>
            <li>Prodi:<?php echo $m[2]; ?></li>
        </ul>
        <?php endforeach; ?>

    </body>

</html>
