<?php
function salam($waktu = "datang", $nama = "admin")
{
    return "Salamat $waktu, $nama !";
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>latihan fungsi</title>
    </head>

    <body>
        <h1><?php echo salam("Pagi",); ?></h1>

    </body>

</html>
