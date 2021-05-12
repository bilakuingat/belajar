<?php

include 'dbconnect.php';

$show_data = "SELECT idkaryawan, username, password, namakaryawan FROM data_karyawan";
$result = $dbconn->query($show_data);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["idkaryawan"]. " || Username: " . $row["username"]. " || Password : " . $row["password"] . " || Nama : " . $row["namakaryawan"] . "<br>";
  }
} else {
  echo "No Ingfo";
}

?>