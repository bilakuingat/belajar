<?php


// koneksi DB
$server = "localhost";
$user = "root";
$pass = "";
$database = "akademik";

$conn = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($conn));
