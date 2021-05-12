<?php
//* menampilkan tanggal
// echo date("l, d-M-Y");

// * buat nambah hari. 2 itu buat harinya
// echo date("l", time() + 60 * 60 * 24 * 2);

// * mktime. cek tgl lahir
// echo date("l", mktime(0, 0, 0, 6, 15, 2000));

// * strtotime
echo date("l", strtotime("15 jun 2000"));
