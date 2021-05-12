<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php
			
			$populasi_penduduk=[
			"Chicago, IL"=>2695598,
			"Dallas, TX"=>1197816,
			"Houston, TX"=>2100263,
			"Los Angeles, CA"=>3792621,
			"New York, NY"=>8175133,
			"Philadelphia, PA"=>1526006,
			"Phoenix, Az"=>1445632,
			"San Antonio, TX"=>1327407,
			"San Diego, CA"=>1307402,
			"San Jose, CA"=>945942,
			];  
			arsort($populasi_penduduk);
			
			$Pengganti = [
			"Philadelphia, PA" => 1400000,
			"Los Angeles, CA" => 3700000,
			];
			
			$Ganti = array_replace($populasi_penduduk,$Pengganti);
		?>
		<table class='tabel' border="3" width = '60%'>
			<h1>Tabel Lama</h1>
			<thead>
				<tr>
					<td align=center> Nama_kota </td> 
					<td align=center> Populasi_penduduk </td>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($populasi_penduduk as $kota=>$populasi)  
					{  
					?>
					<tr>
						<td align=center> <?php echo $kota ?> </td>
						<td align=center> <?php echo $populasi?> </td>
						
					</tr><?php } ?>
					<table class='tabel1' border="3" width = '60%'>
						<thead>
							<tr>
								<td align=center> Nama_kota </td> 
								<td align=center> Populasi_penduduk </td>
							</tr>
							<h1>Tabel Baru</h1>
						</thead>
						<tbody>
							<?php
								foreach($populasi_penduduk as $kota=>$populasi)  
								{  
								?>
								<tr>
									<td align=center> <?php echo $kota ?> </td>
									<td align=center> <?php echo $populasi?> </td>
									
								</tr><?php } ?>
						</body>
					</html>					