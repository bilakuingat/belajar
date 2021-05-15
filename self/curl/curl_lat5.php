<?php

// * initializing
$ch     = curl_init();
curl_setopt($ch, option: CURLOPT_UR, value: 'https://www.dicoding.com/');
curl_setopt($ch, option:CURLOPT_FOLLOWLOCATION, value:1);
curl_setopt($ch, option:CURLOPT_RETURNTRANSFER)
