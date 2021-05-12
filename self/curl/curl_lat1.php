<?php

// * cara 1
// function http_request($url)
// {
//     // * buat curl 
//     $ch     = curl_init();

//     // * set 
//     curl_setopt($ch, CURLOPT_URL, $url);

//     // * kembalikan ke string
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//     // * utk memanggil
//     $output     = curl_exec($ch);

//     // * ditutup
//     curl_close($ch);

//     // * panggil
//     return $output;
// }

// $data   = http_request("https://mmp.unej.ac.id/mod/assign/view.php?id=1349950");

// echo $data;

// * cara 2
function http_request($url)
{
    // persiapkan curl
    $ch = curl_init();

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);

    // set user agent    
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string 
    $output = curl_exec($ch);

    // tutup curl 
    curl_close($ch);

    // mengembalikan hasil curl
    return $output;
}

$profile = http_request("https://api.github.com/users/petanikode");

// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);

echo "<pre>";
print_r($profile);
echo "</pre>";
