<?php

// * pake for
// for ($i = 0; $i < 5; $i++) {
//     echo "Halo <br> ";
// }

// * while. selama kondisi true, lakukan apapun didalamnya
// $i = 0;
// while ($i < 5) {
//     echo "Rafi <br>";
//     $i++;
// }

// * do while. lakukan hal ini selama kondisi True. bedanya akan dijalankan dulu 1x walau false
// $i = 10;
// do {
//     echo "gilang <br>";
//     $i++;
// } while ($i < 5);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .warna-baris {
            background-color: silver;
        }

        </style>
    </head>

    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <!-- Cara 1 -->
            <!-- <?php
                for ($i = 1; $i <= 3; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                }
                ?> -->
            <!-- cara 2. tanda ":" utk membuka php, "endfor" utk menutup  -->
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
                <?php else : ?>
            <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) :
                ?>
                <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>

    </body>

</html>
