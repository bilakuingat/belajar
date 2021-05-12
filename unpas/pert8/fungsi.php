<?php
//  koneksi

$conn = mysqli_connect("localhost", "root", "", "dblatihan");

function query($query)
{
    // # agar $conn bisa kedetect
    global $conn;
    $result = mysqli_query($conn, $query);
    // $rows -> menyiapkan wadah/kotak. $result -> lemari. $row -> baju yg diambil tiap looping
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
