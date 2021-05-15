<?php
// * create cURL source
$curl   = curl_init();

// * set curl option
curl_setopt($curl, CURLOPT_URL, 'https://www.amazon.com');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// * RUN CURL (EXECUTE)
curl_exec($curl);
// echo $result;

// * CLOSE CURL RESOURCE
// curl_close($curl);
