<?php

include 'dbconnect.php';
include 'add_data.php';

$username = $_POST['username'];
$upwd = $_POST['upwd'];
$nama_kywn = $_POST['namakaryawan'];

$add_data = "INSERT INTO data_karyawan (idkaryawan, username, password, namakaryawan) VALUES (NULL, '$username' , '$upwd', '$nama_kywn');";

if ($dbconn->query($add_data) === TRUE) {
    echo "Data added";
  } else {
    echo "Error: " . $add_data . "<br>" . $dbconn->error;
  }


$dbconn->close();


?>