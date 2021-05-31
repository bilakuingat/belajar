<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "fungsi.php";

// * ambil data di url
$id = $_GET["id"];

// * query berdasarkan id
$mhs = query("SELECT * FROM mahasiswa_unpas WHERE id = $id")[0];
// @ [0] krn semuanya dlm index 0

// * koneksi DBMS
// $conn = mysqli_connect("localhost", "root", "", "dblatihan");
// @ sdh tdk diperlukan karena ada di fungsi.php



// * cek apa tombol sdh ditekan
// & submit diambil dari "name" . cara bacanya: "apa $_post yg key-nya 'submit' klo dipencen maka, ambil semua data lalu masukkan ke DB"
if (isset($_POST["submit"])) {

    // * cek apa data berhasil diubah
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
    // @ sdh tdk diperlukan karena ada di fungsi.php

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php'
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah data Mahasiswa</title>
    </head>

    <body>
        <h1>Ubah Data</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
            <ul>
                <li>
                    <label for="nim">NIM :</label>
                    <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
                </li>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
                </li>
                <li>
                    <label for="jurusan">jurusan :</label>
                    <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
                </li>
                <li>
                    <label for="gambar">gambar :</label><br>
                    <img src="../pert10/img/<?= $mhs['gambar']; ?>" alt="" width="40"><br>
                    <input type="file" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah</button>
                </li>
            </ul>
        </form>
    </body>

</html>
