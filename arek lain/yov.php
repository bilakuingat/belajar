<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<p>Nama : Yovie Yuliantono</p>
		<p>NIM : 192410101011 </p>
		<?php
			$Populasi = [
			"Chicago, IL" => 2695598,
			"Dallas, TX" => 1197816,
			"Houston, TX" => 2100263,
			"Los Angeles, Ca" => 3792621,
			"New York, NY" => 8175133,
			"Philadelphia, PA" => 1526006,
			"Phoenix, AZ" => 1445632,
			"San Antonio, TX" => 1327407,
			"San Diego, CA" => 1307402,
			"San Jose, CA" => 945942,
			];
			krsort($Populasi);
		?>
		
		<table class='tabel' border="3" width = '60%'>
			<h1>1 & 2. mebuat array dan Mengurutkan</h1>
			<thead>
				<tr>
					<td align=center> Nama_kota </td> 
					<td align=center> Populasi_penduduk </td>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($Populasi as $kota=>$populasi)  
					{  
					?>
					<tr>
						<td align=center> <?php echo $kota ?> </td>
						<td align=center> <?php echo $populasi?> </td>
						
					</tr><?php } ?>
					<table class='tabel' border="3" width = '60%'>
						<h1>3. mengeprint diatas 1500000</h1>
						<thead>
							<tr>
								<td align=center> Nama_kota </td> 
								<td align=center> Populasi_penduduk </td>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($Populasi as $kota=>$populasi)  
								{if ($populasi > 1500000){
								?>
								<tr>
									<td align=center> <?php echo $kota ?> </td>
									<td align=center> <?php echo $populasi?> </td>
									
								</tr><?php } } ?>
								
								
						</body>
					</html>					