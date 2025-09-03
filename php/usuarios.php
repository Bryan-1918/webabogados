<?php
include 'conexion.php';
$nombreUsuario = $_POST['nombreUsuario'];
$passUsuario = $_POST['passUsuario'];

//echo $nombreUsuario;
//echo $passUsuario;

$sql = "SELECT emailUsuario, passUsuario FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "email: " . $row["emailUsuario"]. " - Password: " . $row["passUsuario"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>