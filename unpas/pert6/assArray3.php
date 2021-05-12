<?php
// * array asosiatif -> key adl str yg dibuat sndr
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
// echo $mahasiswa["nama"];
// echo $mahasiswa[1]["prodi"];
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
            <li><img src="../img/<?php echo $m["gambar"]; ?>" alt="ini foto"></li>
            <li>nama:<?php echo $m["nama"]; ?></li>
            <li>NIM:<?php echo $m["nim"]; ?></li>
            <li>Prodi:<?php echo $m["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>