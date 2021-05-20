<?php
// * alamat link
$url    = 'https://finance.detik.com/fintech/d-5575463/guru-tk-malang-diuber-24-debt-collector-ojk-turun-tangan/';

// * ambil link 
$sumber = file_get_contents($url);


// * membuat data agar bisa digrab
$startpoin = explode('<div class="detail__body-text itp_bodycontent">', $sumber);
$endpoin   = explode('</div>', $startpoin[1]);

// * satukan dlm 1 var
$datagrab   = $endpoin[0];

echo $datagrab;
