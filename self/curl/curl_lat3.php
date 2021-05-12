<?php
function get_web_page($url)
{

    $options = array(
        CURLOPT_CUSTOMREQUEST  => "GET",    // Atur type request, get atau post
        CURLOPT_POST           => false,    // Atur menjadi GET
        CURLOPT_FOLLOWLOCATION => true,    // Follow redirect aktif
        CURLOPT_CONNECTTIMEOUT => 120,     // Atur koneksi timeout
        CURLOPT_TIMEOUT        => 120,     // Atur response timeout
    );

    $ch      = curl_init($url);          // Inisialisasi Curl
    curl_setopt_array($ch, $options);    // Set Opsi
    $content = curl_exec($ch);           // Eksekusi Curl
    curl_close($ch);                     // Stop atau tutup script

    $header['content'] = $content;
    return $header;
}

$result = get_web_page('http://detik.com');
print_r($result);
