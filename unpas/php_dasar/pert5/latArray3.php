<?php

$mahasiswa = [
    ["Rafi", "1029", "SI", "tidur"],
    ["Gilang", "1001", "if", "makan"]
];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mahasiswa</title>
    </head>

    <body>
        <h1>Daftar MHS</h1>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?php echo $mhs[0]; ?></li>
            <li>NIM :<?php echo $mhs[1]; ?></li>
            <li>Prodi :<?php echo $mhs[2]; ?></li>
            <li>Hobi :<?php echo $mhs[3]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>

</html>
