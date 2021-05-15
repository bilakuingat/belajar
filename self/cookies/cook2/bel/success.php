<?php
session_start();

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('index.php');
    exit();
}
include('conn.php');
$query = mysqli_query($conn, "SELECT * from user where userid='" . $_SESSION['id'] . "'");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Setting Up Cookie on User Login</title>
    </head>

    <body>
        <h2>Login Success</h2>
        <h3>Welcome</h3>
        <?php echo $row['fullname']; ?>
        <br>
        <a href="logout.php" onclick="return confirm('yakin logout?');">Logout</a>
    </body>

</html>
