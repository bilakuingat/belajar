<?php

function ambil_url($url)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($client, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);
    return json_decode($response);
}
// * ambil data positif global
$url_global_positif = "https://api.kawalcorona.com/positif/";
$result = ambil_url($url_global_positif);
$jumlah_positif_global = $result->value;
// var_dump($result); -> utk debug

// * ambil data sembuh global
$url_global_sembuh = "https://api.kawalcorona.com/sembuh/";
$result = ambil_url($url_global_sembuh);
$jumlah_sembuh_global = $result->value;
// var_dump($result); -> utk debug

// * ambil data meninggal global
$url_global_mati = "https://api.kawalcorona.com/meninggal/";
$result = ambil_url($url_global_mati);
$jumlah_mati_global = $result->value;
// var_dump($result); -> utk debug

// * indonesia
$url_indo = "https://api.kawalcorona.com/indonesia/";
$result = ambil_url($url_indo);
$positif = $result[0]->positif;
$mati = $result[0]->meninggal;
$sembuh = $result[0]->sembuh;

// * provinsi
$url_provinsi = "https://api.kawalcorona.com/indonesia/provinsi/";
$data_prov = ambil_url($url_provinsi);
