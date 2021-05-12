<?php

include 'dbconnect.php';
include 'edit_data.php';

$nama = $_POST['namakaryawan'];
$id = $_POST['idkaryawan'];

$edit_data = "UPDATE data_karyawan SET namakaryawan = '$nama' WHERE idkaryawan = '$id' ";

if (isset($_POST['submit'])) {  
    if ($dbconn->query($edit_data) === TRUE) {
        echo "User ID " . $id . " Data has been Updated";
    } else {
        echo "Error :  " . $dbconn->error;
    }
}
$dbconn->close();


?> 