<?php
// conectar php con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_abogados";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>