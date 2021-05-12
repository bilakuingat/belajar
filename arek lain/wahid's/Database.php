<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test-1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected";

// if (isset($_GET["simpan"])) {
//     if (empty($_GET["nama"])) {
//       echo "Data tidak lengkap <br>";
//     } else{
//         echo "Nama : ".$_GET["nama"]." <br>";
//       };
//     if(empty($_GET["nim"])){
//       echo "Data tidak lengkap <br>";
//     } else{
//         echo "NIM : ".$_GET["nim"]." <br>";
//       };
//     if(empty($_GET["password"])){
//       echo "Data tidak lengkap <br>";
//     } else{
//         echo "Kelas : Pemrograman Website ".$_GET["password"]." <br>";
//       };
//   }

if (isset($_GET["simpan"])) {
    $sql = "INSERT INTO `user` (`id`, `nama`, `nim`, `password`) VALUES (NULL, '".$_GET["nama"]."', '".$_GET["nim"]."', '".$_GET["password"]."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

if (isset($_GET["hapus"])){
    $sql = "DELETE FROM `user` WHERE `user`.`nim` = '".$_GET["nim"]."'";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}

if (isset($_GET["edit"])){
    $sql = "UPDATE `user` SET nama = '".$_GET["nama"]."', nim = '".$_GET["nim"]."', `password`='".$_GET["password"]."'  WHERE `user`.`id` = '".$_GET["id"]."'";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    };
    $conn->close();
};

if (isset($_GET["tampilkan"])){
    $sql = "SELECT id, nama, nim, 'password' FROM `user`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
            echo  $row["id"] ."     ". $row["nama"]. "     ". $row["nim"]. "     ". $row["password"] . "<br>";
        };
    };
}
  

?>