<?php
    $rusuk=5;
    $luas=null;

    function luas_sisi_kubus($rusuk){
        $sisi=$rusuk**2;
        $luas=6*$rusuk;
        return $luas;
    }
    print "Pnajang rusuk: $rusuk<br>";
    $luas=luas_sisi_kubus($rusuk);
    print "luas sisi:$luas<br>"


?>