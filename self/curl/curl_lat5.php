<?php

function bacaHTML($url)
{
    // inisialisasi CURL
    $data = curl_init();
    // setting CURL
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    // menjalankan CURL untuk membaca isi file 
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}

$sumber =  bacaHTML('https://www.pertamina.com/id/news-room/announcement/daftar-harga-bbk-tmt-01-april-2021/');
$startpoin = explode('<table class="table table-striped" style="height: 1832px;">', $sumber);
$endpoin = explode('</table>', $startpoin[1]);


echo "<table border=1>";
echo $endpoin[0];
echo "</table>";
