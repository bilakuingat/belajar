<html>
<body>
<?php
if (isset($_GET["simpan"])) {
  if (empty($_GET["nama"])) {
    echo "Data tidak lengkap <br>";
    } else{
      echo "Nama : ".$_GET["nama"]." <br>";
    };
  if(empty($_GET["nim"])){
    echo "Data tidak lengkap<br>"; 
    } else{
      echo "NIM : ".$_GET["nim"]." <br>";
    };
  if(empty($_GET["password"])){
    echo "Data tidak lengkap <br>";
    } else{
      echo "Kelas : Pemrograman Website ".$_GET["password"]." <br>";
    };
}


  ?>
</body>
</html>