<?php

session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'fungsi.php';
// & post login diambil dari nama tombol button
if (isset($_POST["login"])) {
    $username   = $_POST["username"];
    $password   = $_POST["password"];

    $result     = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    // * cek username
    // & cek apakah ada baris yg dikembalikan dari query result
    if (mysqli_num_rows($result) === 1) {
        // * cek passwd
        $row    = mysqli_fetch_assoc($result);
        // & kalo pake passws_hash hrus pake pass_verify()
        if (password_verify($password, $row["password"])) {

            // *set session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        };
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

    <body>
        <h1>Halaman Login</h1>
        <?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic;"> Username/pass salah </p>
        <?php endif; ?>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="login">login</button>
                </li>
            </ul>
        </form>
    </body>

</html>
