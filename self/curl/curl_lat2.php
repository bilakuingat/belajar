<?php
// * untuk show text
// echo file_get_contents('https://sekolahkoding.com/forum/Apa-Itu-Curl');

$url    = 'https://sekolahkoding.com/forum/Apa-Itu-Curl';
// * inisialisasi
$curl   = curl_init($url);
// * passing opsi
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// * eksekusi
$html = curl_exec($curl);

echo htmlspecialchars($html);
