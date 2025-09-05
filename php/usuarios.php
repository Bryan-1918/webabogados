<?php
include 'conexion.php';
$emailUsuario = $_POST['emailUsuario'];
$passUsuario = $_POST['passUsuario'];

//echo $nombreUsuario;
//echo $passUsuario;

$sql = "SELECT emailUsuario, passUsuario, tipoUsuario FROM usuarios WHERE emailUsuario = '$emailUsuario' AND passUsuario = '$passUsuario'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
  $tipoUsaurio = $row["tipoUsuario"];
  echo $tipoUsaurio;

  switch($tipoUsaurio) {
    case "Administrador": echo "Es un Super Usuario";
                          header('location: ../crudUser.html');
    break;
    case "Usuario": echo "Es pepito";
                    header('location: ../index.html');
  }
  
} else {
  echo "0 results";
}

mysqli_close($conn);

?>