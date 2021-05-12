<?php
//* apa tombol sudah ditekan
if (isset($_POST["submit"])) {
    // * cek username & pass
    if ($_POST["username"] == "admin" && $_POST["Password"] == "123") {
        // * jika benar ke admin page
        header("Location: admin.php");
        exit;
    } else {
        // * jika salah, show pesan
        $error = true;
    }
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
        <h1>Login Admin</h1>
        <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username/password salah</p>
        <?php endif; ?>
        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password">
                </li>
                <li>
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>
        </ul>
    </body>

</html>
