<?php

// * koneksi
$conn = mysqli_connect("localhost", "root", "", "dblatihan");

// * ambil data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa_unpas ");
// * memunculkan notif jika error
if (!$result) {
    echo mysqli_error($conn);
}
// * ambil data biar terlihat
// ? cara 1 (row) -> array num
// $mhs = mysqli_fetch_row($result);
// ? cara 2 (assoc) -> array assosiatif
// $mhs = mysqli_fetch_assoc($result);
// ? cara 3 (array) -> array assosiatif & num. bisa ke2nya, tp datanya dobel jd lebih berat
// $mhs = mysqli_fetch_array($result);
// ? cara 4 (object) -> hrus pake"->". con: var_dump($mhs->nama);
// $mhs = mysqli_fetch_object($result);

// * biar semua data di tampilkan
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs["nama"]);
// }


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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50" height="50" alt=""></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>