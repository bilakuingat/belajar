<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>
        <title>Document</title>
    </head>

    <body>
        <?php require_once 'process.php'; ?>
        <?php $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die(mysqli_error($mysqli));
    // pre_r($result);
    // pre_r($result->fetch_assoc());
    ?>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th colspan="2">action</th>
                    </tr>
                </thead>
                <?php
            while ($row = $result->fetch_assoc());
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td></td>
                </tr>
                <?php T_ENDWHILE; ?>
            </table>
        </div>

        <?php
    function pre_r($array)
    {
        echo '<prev>';
        print_r($array);
        echo '</prev>';
    }
    ?>
        <div class="row justify-content-center">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter ur name">
                </div>
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="enter ur loc">
                </div>
                <div class="form-group">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </body>

</html>
