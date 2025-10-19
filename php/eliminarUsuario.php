<?php
// Eliminar usuario desde el CRUD 
include 'conexion.php';

if (isset($_GET['email'])) {
  $emailUsuario = $_GET['email'];
}else {
  echo "<script>
            alert('⚠️ No se recibió el correo del usuario.');
            window.location.href = '../eliminarUsuario.html';
          </script>";
    exit;
}

$check = "SELECT * FROM usuarios WHERE emailUsuario = '$emailUsuario'";
$result = mysqli_query($conn, $check);


if(mysqli_num_rows($result) > 0) {
  // Si el usuario existe lo eliminamos
  $sql = "DELETE FROM usuarios WHERE emailUsuario = '$emailUsuario'";
  
  if (mysqli_query($conn, $sql)) {
      echo "<script>
              alert('Usuario eliminado correctamente ✅');
              window.location.href = '../eliminarUsuario.html'; // <-- Redirige al menú del CRUD
            </script>";
  } else {
      echo "<script>
              alert('❌ Error eliminando el usuario: " . mysqli_error($conn) . "');
              window.location.href = '../eliminarUsuario.html'; // <-- También redirige en caso de error
            </script>";
  }
}else {
  // El usuario no existe
  echo "<script>
            alert('⚠️ El usuario con ese correo no existe en la base de datos');
            window.location.href = '../eliminarUsuario.html';
          </script>";
}

mysqli_close($conn);
?>
