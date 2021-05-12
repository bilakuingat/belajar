<?php
// koneksi DB
$server = "localhost";
$user = "root";
$pass = "";
$database = "dblatihan";

$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

// jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    //pengujian apa ingin diedit atau disimpan baru
    if ($_GET['hal'] == "edit") {
        //data diedit
        $edit = mysqli_query($koneksi, "UPDATE tmbs set
                                        nim='$_POST[tnim]', 
                                        nama='$_POST[tnama]', 
                                        alamat='$_POST[talamat]', 
                                        prodi='$_POST[tprodi]'
                                        WHERE id_mhs='$_GET[id]'
                                        ");

        if ($edit) //jika edit sukses
        {
            echo "<script>
                alert('Edit sukses');
                document.location='index.php';
            </script>";
        } else //jika simpan gagal
        {
            echo "<script>
                alert('Edit gagal');
                document.location='index.php';
            </script>";
        }
    } else {
        //data disimpan baru
        $simpan = mysqli_query($koneksi, "insert into tmbs(nim,nama,alamat,prodi)
                                        values  ('$_POST[tnim]',
                                                '$_POST[tnama]',
                                                '$_POST[talamat]',
                                                '$_POST[tprodi]')
                                                ");

        if ($simpan) //jika simpan sukses
        {
            echo "<script>
                alert('Simpan sukses');
                document.location='index.php';
            </script>";
        } else //jika simpan gagal
        {
            echo "<script>
                alert('Simpan gagal');
                document.location='index.php';
            </script>";
        }
    }
}
//uji tombol edit/hapus
if (isset($_GET['hal'])) {
    //uji jika edit data
    if ($_GET['hal'] == "edit") {
        //show data yang diedit
        $tampil = mysqli_query($koneksi, "SELECT * from tmbs WHERE id_mhs='$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
            //jika data ditemukan
            $vnim = $data['nim'];
            $vnama = $data['nama'];
            $valamat = $data['alamat'];
            $vprodi = $data['prodi'];
        }
    } else if ($_GET['hal'] == "hapus") {
        //persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM tmbs WHERE id_mhs='$_GET[id]'");
        if ($hapus) {
            echo "<script>
                alert('Hapus berhasil');
                document.location='index.php';
            </script>";
        }
    }
}
// paging
$batas = 5;
$halaman = @$_GET['halaman'];
if (empty($halaman)) {
    $posisi = 0;
    $halaman = 1;
} else {
    $posisi = ($halaman - 1) * $batas;
}
// hitung halaman
$query2 = mysqli_query($koneksi, "SELECT * FROM tmbs");
$jumlahdata = mysqli_num_rows($query2);
$jmlhalaman = ceil($jumlahdata / $batas);

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD 2020 </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">CRUD php & mySQL</h1>
            <h2 class="text-center">Rafi cahya</h2>
            <!-- awal card form -->
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    form input data mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="tnim" value="<?= @$vnim ?>" class="form-control"
                                placeholder="Input disini" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="tnama" value="<?= @$vnama ?>" class="form-control"
                                placeholder="Input disini" required>
                        </div>
                        <div class="form-group">
                            <label for="">Program studi</label>
                            <select name="tprodi" class="form-control">
                                <option value="<?= @$vprodi ?>"><?= @$vprodi ?></option>
                                <option value="SI">sistem informasi</option>
                                <option value="TI">teknologi informasi</option>
                                <option value="IF">informatika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="talamat" class="form-control"
                                placeholder="Input disini"><?= @$valamat ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="bsimpan">simpan</button>
                        <button type="reset" class="btn btn-danger" name="bsimpan">Kosongkan</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- akhir card form -->

        <!-- awal card table -->
        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                daftar mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                $no = 1 + $posisi;
                $tampil = mysqli_query($koneksi, "select * from tmbs order by id_mhs desc LIMIT $posisi,$batas");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>


                    <tr>
                        <td>
                            <?= $no++; ?>
                        </td>
                        <!-- <td><?= $data['id_mhs'] ?></td> -->
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['prodi'] ?></td>
                        <td>
                            <a href="index.php?hal=edit&id=<?= $data['id_mhs'] ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?hal=hapus&id=<?= $data['id_mhs'] ?>"
                                onclick="return confirm('Apa yakin dihapus?')" class="btn btn-danger">Hapus</a>
                        </td>

                    </tr>
                    <?php endwhile; ?>
                    <!-- penutup -->
                </table>
            </div>
        </div>
        <!-- akhir card table -->
        <!-- awal pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
            for ($i = 1; $i <= $jmlhalaman; $i++)
                if ($i != $halaman) {
                    echo "<li class='page-item'><a class='page-link' href=\"index.php?halaman=$i\">$i</a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' >$i</a></li>";
                }
            ?>


            </ul>
        </nav>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>

</html>
