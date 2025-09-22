<?php
include 'conexion.php';
$nombreUsuario = $_POST['nombre'];
$apellidoUsuario = $_POST['apellido'];
$emailUsuario = $_POST['email'];
$telUsuario = $_POST['telefono'];
$passUsuario = $_POST['password'];
$tipoUsuario = 'Usuario';

$sql = "INSERT INTO usuarios (nombreUsuario, apellidoUsuario, emailUsuario, telUsuario, passUsuario, tipoUsuario, created_at, updated_at) 
        VALUES ('$nombreUsuario', '$apellidoUsuario', '$emailUsuario', '$telUsuario', '$passUsuario', '$tipoUsuario', NOW(), NOW())";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<script>
          alert('Usuario creado correctamente ✅');
          window.location.href = '../login.html'; // <-- Redirige al login
        </script>";
} else {
  if (mysqli_errno($conn) == 1062) { // Código de error de duplicado
    echo "❌ Este correo ya está registrado. Intenta con otro.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}


?>