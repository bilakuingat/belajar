<?php

require "fungsi.php";
// * koneksi DBMS
// $conn = mysqli_connect("localhost", "root", "", "dblatihan");
// @ sdh tdk diperlukan karena ada di fungsi.php



// * cek apa tombol sdh ditekan
// & submit diambil dari "name" . cara bacanya: "apa $_post yg key-nya 'submit' klo dipencen maka, ambil semua data lalu masukkan ke DB"
if (isset($_POST["submit"])) {

    // * cek apa data berhasil ditambah
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
    // @ sdh tdk diperlukan karena ada di fungsi.php

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
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
        <title>Tambah data Mahasiswa</title>
    </head>

    <body>
        <h1>Tambah Data</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nim">NIM :</label>
                    <input type="text" name="nim" id="nim" required>
                </li>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="jurusan">jurusan :</label>
                    <input type="text" name="jurusan" id="jurusan">
                </li>
                <li>
                    <label for="gambar">gambar :</label>
                    <input type="text" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah</button>
                </li>
            </ul>
        </form>
    </body>

</html>
