<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dblatihan';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($link));

$perPage = 3; //banyak data/hal
$page = isset($_GET["halaman"]) ? (int)$$_GET["halaman"] : 1;
$start = ($page > 1) ? ($page * $perpage) - $perPage : 0;

$articles = "SELECT * FROM tmbs LIMIT $start,$perPage";


//lihat total
$result = mysqli_query($link, "SELECT * FROM tmbs");
$total = mysqli_num_rows($result);
// die("total.." . $total);

// buat nampilkan angka hal
$pages = ceil($total / $perPage);

?>
<div class="">
    <?php for ($i = 1; $i <= $pages; $i++) { ?>
    <a href="#">

        <? echo $i ?>

    </a>
    <?php } ?>
</div>
