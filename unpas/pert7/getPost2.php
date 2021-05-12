<?php
// * cek data klo ada yg ksong
if (
    !isset($_GET["nama"])   ||
    !isset($_GET["nim"])    ||
    !isset($_GET["prodi"])  ||
    !isset($_GET["gambar"])
) {
    header("Location: getPost1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <ul>
        <li><img src="../img/<?php echo $_GET["gambar"]; ?>" alt=""></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["prodi"]; ?></li>
    </ul>
    <a href="getPost1.php">Kembali ke menu</a>
</body>

</html>