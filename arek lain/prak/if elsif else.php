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
			echo ("Nama = Yovie Yuliantono <br>");
			echo("NIM = 192410101011 <br>");
			$car = "Marcedes";
			
			if ($car == "BMW"){
				echo "Plat nomormu 30-KL-PO";
				} elseif ($car == "Marcedes"){
				echo "Plat nomormu 51-ZD-ZD" ;
				} elseif($car == "Maserati"){
				echo "Plat nomormu JB-47-02";
				} else {
				echo "Ga punya mobil ya ";
			}
		?>
	</body>
</html>