<?php

// * variable global. 

// $x = 10;

// function tampilx()
// {
//     // global utk cari keluar
//     global $x;
//     echo $x;
// }

// tampilx();

$mahasiswa = [
    [
        "nama" => "Rafi",
        "nim" => "1029",
        "prodi" => "SI",
        "gambar" => "WIN_20210402_16_42_24_Pro.jpg"
    ],
    [
        "nama" => "gilang",
        "nim" => "1010",
        "prodi" => "IF",
        "gambar" => "WIN_20210402_21_24_55_Pro.jpg"
    ],
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

        <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="getPost2.php?nama=<?php echo $mhs["nama"]; ?>
                    & nim= <?php echo $mhs["nim"]; ?>
                    & prodi=<?php echo $mhs["prodi"]; ?>
                    & gambar=<?php echo $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

    </body>

</html>
