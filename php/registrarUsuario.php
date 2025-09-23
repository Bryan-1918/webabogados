<?php
// Registrar usuario desde el crud
include 'conexion.php';
$nombreUsuario = $_POST['nombre'];
$apellidoUsuario = $_POST['apellido'];
$emailUsuario = $_POST['email'];
$telUsuario = $_POST['telefono'];
$passUsuario = $_POST['password'];
$tipoUsuario = $_POST['tipoUsuario'];

// encriptar contraseña
$passHash = password_hash($passUsuario, PASSWORD_DEFAULT);

$check = "SELECT * FROM usuarios WHERE emailUsuario = '$emailUsuario'";
$result = mysqli_query($conn, $check);


if(mysqli_num_rows($result) > 0) {
  echo "<script>alert('❌ Este correo ya está registrado'); window.history.back();</script>";
  exit();
}

$sql = "INSERT INTO usuarios (nombreUsuario, apellidoUsuario, emailUsuario, telUsuario, passUsuario, tipoUsuario, created_at, updated_at) VALUES ('$nombreUsuario', '$apellidoUsuario', '$emailUsuario', '$telUsuario', '$passHash', '$tipoUsuario', NOW(), NOW())";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('✅ Usuario registrado correctamente'); window.location.href='../crudUser.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>