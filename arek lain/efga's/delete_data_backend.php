<?php

include 'dbconnect.php';
include 'delete_data.php';

$id = $_POST['idkywn'];

$delete_data = "DELETE FROM data_karyawan WHERE idkaryawan = '$id'";

if ($dbconn->query($delete_data) === TRUE) {
  echo "User ID " . $id . " has been Deleted";
} else {
  echo "Error : " . $dbconn->error;
}

?>