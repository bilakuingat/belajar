<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="biodata" method="GET" action="Database.php">
<pre>
id          : <input type="text" name="id" id="id">
Nim         : <input type="text" name="nim" id="nim">
Nama        : <input type="text" name="nama">
Password    : <input type="password" name="password">
</pre>
<input type="submit" value="Edit berdasarkan id" name="edit">
</form>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test-1";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT id, nama, nim, 'password' FROM `user`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
            echo  "<br>". $row["id"] ."     ". $row["nama"]. "     ". $row["nim"]. "     ". $row["password"] . "<br>";
        };
    };

    ?>
</body>
</html>