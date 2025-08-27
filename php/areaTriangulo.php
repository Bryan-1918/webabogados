<?php // así se inicializa un código php
include 'conexion.php';
// las variables en php se crean usando el signo $
$nombreUsuario = $_POST['nombreUsuario'];
$apellidoUsuario = $_POST['apellidoUsuario'];
$alturaTriangulo = $_POST['alturaTriangulo'];
$baseTriangulo = $_POST['baseTriangulo'];

// echo se utiliza para imprimir en pantalla
echo "El nombre digitado fue: ", $nombreUsuario;
echo " El apellido digitado fue: ", $apellidoUsuario;
echo " La altura digitada fue: ", $alturaTriangulo;
echo " La base digitada fue: ", $baseTriangulo;

$areaTriangulo = ($baseTriangulo * $alturaTriangulo)/2;
echo "El área del triángulo es: ", $areaTriangulo;

$sql = "INSERT INTO areatriangulo (nombreUsuario, apellidoUsuario, baseTriangulo, alturaTriangulo, areaTriangulo)
VALUES ('$nombreUsuario', '$apellidoUsuario', '$alturaTriangulo', '$baseTriangulo', '$areaTriangulo')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 