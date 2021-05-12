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
$car = "BMW";

switch ($car) {
  case "BMW":
    echo " Plat nomormu 30-KL-PO ";
    break;
  case "Marcedes":
    echo "Plat nomormu 51-ZD-ZD";
    break;
  case "Maserati":
    echo "Plat nomormu JB-47-02";
    break;
  default:
    echo "Ga punya mobil ya ";
}
?>
</body>
</html>