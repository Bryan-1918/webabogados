<?php
include 'conexion.php';
$nombreUsuario = $_POST['nombre'];
$apellidoUsuario = $_POST['apellido'];
$emailUsuario = $_POST['email'];
$telUsuario = $_POST['telefono'];
$passUsuario = $_POST['password'];
$tipoUsuario = $_POST['tipoUsuario'];

$sql = "INSERT INTO usuarios (nombreUsuario, apellidoUsuario, emailUsuario, telUsuario, passUsuario, tipoUsuario, created_at, updated_at) VALUES ('$nombreUsuario', '$apellidoUsuario', '$emailUsuario', '$telUsuario', '$passUsuario', '$tipoUsuario', NOW(), NOW())";
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully ✅";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>