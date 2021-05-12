<?php
    $contoh_int = 1;
    $contoh_str = "aku"
    $contoh_double = 1.1;
    $contoh_arr = [];
?>
<?php
    $array = ['pemro','website','kelas b','sem4'];
    foreach ($array as $value) {
        echo $value . "";
    } 

    for ($i =0; $i < count($array); $i++){
        echo $array [$i]. "<br>";
    }
?>
    $mahasiswa = [
        [
        'nama' => 'syafiq',
        'nim' => '192410101071',
        'usia' => '19'
        ],
        ['nama' => 'mohammad',
        'nim' => "1924101071",
        'usia' => '20'
        ],
    ];

    switch ($mahasiswa) {
        case $mahasiswa['nama'] === 'firman':
            echo $mahasiswa['nama'];
            break;
        default :
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1</title>
</head>
<body>
	
	<h1> DATA MAHASISWA </h1>
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Usia</th>
			</tr>
		</thead>
		<tbody>
			<? foreach($mahasiswa as $student); ?>
				<?php
					switch ($student){
						case $student['nama'] === 'firman':
							echo $student['nama'};
							break;
						default :
							brak;
				?>
				<tr>
					<td><? echo $student['Nama']; ?></td>
					<td><? echo $student['NiM']; ?></td>
					<td><? echo $student['Usia']; ?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</body>
</html>