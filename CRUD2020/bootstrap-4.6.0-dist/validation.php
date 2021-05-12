<?php

if (strlen($_POST['tnama']) == 0) {
    exit('Nama harus diisi');
}

// $validate_nim = filter_input(INPUT_POST, 'tnim', FILTER_VALIDATE_INT);
// if (is_null($validate_nim) || ($validate_nim === FALSE)) {
//     exit('NIM harus angka!!!');
// }

if (strlen($_POST['talamat']) == 0) {
    exit('Alamat harus diisi');
}


$validate_prodi = array('SI', 'TI', 'IF');
if (!in_array($_POST['tprodi'], $validate_prodi)) {
    exit('pilih prodi anda');
}
