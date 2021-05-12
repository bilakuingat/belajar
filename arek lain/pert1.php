<?php
    $data = [
        ["kota"=>"Chicago,IL", "populasi"=> "2.695.598"],
        ["kota"=>"Dallas, TX", "populasi" => "1.197.816"],
        ["kota"=>"Houston, TX", "populasi" => "2.100.263"],
        ["kota"=>"Los Angeles, CA", "populasi" => "3.792.621"],
        ["kota"=>"New York, NY", "populasi" => "8.175.133"],
        ["kota"=>"Philadelphia,PA", "populasi" => "1.526.006"],
        ["kota"=>"Phoenix, AZ", "populasi" => "1.445.632"],
        ["kota"=>"San Antonio, TX", "populasi" => "1.327.407"],
        ["kota"=>"San Diego, CA", "populasi" => "1.307.402"],
        ["kota"=>"San Jose, CA", "populasi" => "945.942"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <style> 
        .warna1{
            background-color: coral;
        }

        .warna2{
            background-color: gray
            ;
        }
    </style>
</head>
<body>
    <?php echo "<center><h1> Table Data Penduduk </h1></center>"; ?>
    <table border="2" cellpadding="5" cellspacing="5" align="center">
        <th class="warna1"> Nama Kota</th>
        <th class="warna2"> Jumlah Populasi Orang</th>
    <?php foreach ($data as $d): ?>
        <tr>
        <td><?php echo $d["kota"]; ?> </td>
        <td><?php echo $d["populasi"]; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <br>

    <?php echo "<center><h1> Table Data Penduduk Baru</h1></center>"; ?>
    <table border="2" cellpadding="5" cellspacing="5" align="center">
    <?php foreach ($data as $d): ?>
        <th class="warna2"> Nama Kota</th>
        <th class="warna1"> Jumlah Populasi Orang</th>
        <tr>
        <td><?php echo $d["kota"]; ?> </td>
        <td>
        <?php
        if ($d["kota"] == "Los Angeles, CA") {
            $d["populasi"] = "3.700.000";
        } else if ($d["kota"] == "Philadelphia,PA") {
            $d["populasi"] = "1.400.000";
        }
        echo $d["populasi"]; 
        ?> </td>
        </tr>
    <?php endforeach; ?>

</body>
</html>