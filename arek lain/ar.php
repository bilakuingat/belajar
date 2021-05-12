<?php
    $arr = [
        [
            'nama' => 'arul',
            'nim' => '192410101044',
            'usia' => '20'
        ],
        [
            'nama' => 'haha',
            'nim' => '192410101001',
            'usia' => '21'
        ],
        [
            'nama' => 'lala',
            'nim' => '192410101008',
            'usia' => '21'
        ]
    ];

    $arr2 = ['arul', '192410101044', '20']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar</title>
    <!-- <style>
        .container{
            background-color: salmon;
            font-size: 20px;
            text-align: center;
            width: 500px;
        }
    </style> -->
</head>
<body>
<!-- looping 1 -->
    <!-- <div class="container">
        <?php 
            for ($angka = 0; $angka < 6; $angka++){ 
                echo '<h2>Hello World</h2>';
            }
        ?>
    </div>
    <br>
    <?php
        $str_satu = 'pemrograman';
        $str_dua = 'website';
    ?>
    <?php echo $str_satu . " " . $str_dua; ?>
    <br> -->
<!-- looping foreach -->
    <!-- <?php 
        foreach ($nama_kota as $kota){ 
            echo $kota . '<br>';
        }
    ?> -->
<!-- looping dengan count -->
    <!-- <?php 
        for ($angka = 0; $angka < count(($nama_kota)); $angka++){ 
            echo '<h2>Hello World</h2>';
        }
    ?> -->
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $arr2[0]; ?></td>
                <td><?= $arr2[1]; ?></td>
                <td><?= $arr2[2]; ?></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>