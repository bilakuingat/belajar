<?php
require 'fungsi.php';

$mahasiswa = query("SELECT * FROM mahasiswa_unpas ORDER BY id DESC ");

// * tombol cari diklik
// & kalo tombol cari dipencet, ambil apapun yg diketik user, masukkan ke fungsi 
// & menentukan var global hrus sama kaya di html-nya
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="cari DATA disini" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        <!-- buat logika biar bisa nambah -->
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) :  ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
                <td><img src="../pert10/img/<?= $row["gambar"]; ?>" width="50" height="50" alt=""></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>