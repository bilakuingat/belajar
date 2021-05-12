<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sqlGet = "SELECT * FROM mahasiswa WHERE nim='$nim' ";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>ADD DATA</title>
</head>

<body>

    <div class="w-50 mx-auto mt-5 border p-3">
        <a href="index.php" class="btn btn-primary mt-3"> MENU AWAL</a>
        <form action="update.php" method="POST">
            <label for="nim"> NIM </label>
            <input type="text" id="nim" class="form-control mt-3" name="nim" value="<?php echo "$data[nim]"; ?>" required>

            <label for="nama"> NAMA </label>
            <input type="text" id="nama" class="form-control" name="nama" value="<?php echo "$data[nama]"; ?>" required>

            <label for="fakultas"> FAKULTAS </label>
            <select name="fakultas" id="fakultas" class="form-control" required>
                <option disabled selected value><?php echo "$data[fakultas]"; ?></option>
                <option value="fh">FH</option>
                <option value="ilkom">Ilkom</option>
                <option value="fib">FIB</option>
            </select>

            <input type="submit" value="Update Data" class="btn btn-success mt-3 " name="tambah">
        </form>
    </div>
    <?php

    if (isset($_POST['tambah'])) {
        $nim       = $_POST['nim'];
        $nama      = $_POST['nama'];
        $fakultas  = $_POST['fakultas'];

        $sqlUpdate  = " UPDATE mahasiswa 
                        SET nim='$nim', nama='$nama', fakultas='$fakultas' WHERE nim='$nim'  ";

        $queryUpdate = mysqli_query($conn, $sqlUpdate);



        header("location:index.php");
    }

    ?>

    <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->

</body>

</html>