<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MAIN MENU</title>
    </head>

    <body>
        <div class="container mt-3">
            <a href="add.php" class="btn btn-primary btn-md mb-3">ADD DATA</a>
            <table class="table table-striped table-hover mt-5 table-bordered" id="myTable">
                <thead class="table-dark text-center">
                    <th>No</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>FAKULTAS</th>
                    <th>Aksi</th>
                </thead>

                <?php
            $no = 1;
            $sqlGet = "SELECT * FROM mahasiswa ORDER BY id DESC  ";
            $query = mysqli_query($conn, $sqlGet);

            while ($data = mysqli_fetch_array($query)) : ?>

                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['fakultas'] ?></td>
                        <td>
                            <div class='row'>
                                <div class='col d-flex justify-content-center'>
                                    <a href="update.php?nim=<?php echo $data['nim'] ?>"
                                        class='btn btn-sm btn-warning'>UPDATE</a>
                                </div>
                                <div class='col d-flex justify-content-center'>
                                    <a href="delete.php?nim=<?php echo $data['nim'] ?>"
                                        class='btn btn-sm btn-danger'>DELETE</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <?php endwhile; ?>

            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <!-- Pencarian Data & Pagination -->
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        </script>


    </body>

</html>
