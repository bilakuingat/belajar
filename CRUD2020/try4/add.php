<?php
include 'koneksi.php';
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
        <form action="add.php" method="POST">
            <label for="nim"> NIM </label>
            <input type="text" id="nim" class="form-control mt-3" name="nim" required>

            <label for="nama"> NAMA </label>
            <input type="text" id="nama" class="form-control" name="nama" required>

            <label for="fakultas"> FAKULTAS </label>
            <select name="fakultas" id="fakultas" class="form-control" required>
                <option disabled selected value>-pilih fakultas-</option>
                <option value="fh">FH</option>
                <option value="ilkom">Ilkom</option>
                <option value="fib">FIB</option>
            </select>

            <input type="submit" value="tambahData" class="btn btn-success mt-3 " name="tambah">
        </form>
    </div>
    <?php

    if (isset($_POST['tambah'])) {
        $nim       = $_POST['nim'];
        $nama      = $_POST['nama'];
        $fakultas  = $_POST['fakultas'];

        //cek data sdh ada atau belum (opsional)
        // $sqlGet    = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim' ");
        // $cek       = mysqli_num_rows($sqlGet);

        // masukkan data DB
        $sqlInsert  = "INSERT INTO mahasiswa (nim,nama,fakultas) VALUES ('$nim','$nama','$fakultas')";

        $queryInsert = mysqli_query($conn, $sqlInsert);




        // if (isset($sqlInsert) && $cek <= 0 && $sqlInsert) {
        //     echo "
        //     <div class='alert alert-success'>Data berhasil ditambah <a href='index.php'>Lihat data</a></div>

        //     ";
        // } else if ($cek >= 1) {
        //     echo "
        //     <div class='alert alert-danger'>Data gagal ditambah <a href='index.php'>Lihat data</a></div>

        //     ";
        // }

        // if ($queryInsert) //jika add sukses
        // {
        //     echo "<script>
        //         alert('add sukses');
        //         document.location='add.php';
        //     </script>";
        // } else //jika simpan gagal
        // {
        //     echo "<script>
        //         alert('add gagal');
        //         document.location='add.php';
        //     </script>";
        // }

        // echo "<script>
        //          alert('add sukses');
        //          document.location='add.php';
        //      </script>";


        header("location:index.php");
    }

    ?>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>