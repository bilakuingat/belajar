<?php
//$str_satu = "pemrograman";
//$str_dua = "website"

//echo $str_satu . " " . $str_dua;

//$array = ['Pemrograman', 'Website', 'Semester 4', 'kelas B'];

$mahasiswa = [     //array asosiatif
        [
            'nama' => 'bagus',
            'nim' => '192410101135',
            'usia' => 'dua puluh',
        ],
        [
            'nama' => 'shyfa',
            'nim' => '192410101135',
            'usia' => 'dua satu', 
        ],
        [
            'nama' => 'dinda',
            'nim' => '192410101135',
            'usia' => 'sembilan belas',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($mahasiswa as $setiap_mahasiswa) : ?>
            <tr>
                <td><?php echo $setiap_mahasiswa['nama'] ?></td>
                <td><?php echo $setiap_mahasiswa['nim'] ?></td>
                <td><?php echo $setiap_mahasiswa['usia'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>
</body>
</html>