<?php
include 'conexion.php';

$nombreUsuario = $_POST['nombreUsuario'];
$apellidoUsuario = $_POST['apellidoUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$telUsuario = $_POST['telUsuario'];
$tipoUsuario = $_POST['tipoUsuario'];
$emailOriginal = $_POST['emailOriginal'];

$sql = "UPDATE usuarios
        SET nombreUsuario='$nombreUsuario', apellidoUsuario='$apellidoUsuario', emailUsuario='$emailUsuario', 
            telUsuario='$telUsuario', tipoUsuario='$tipoUsuario', updated_at=NOW() 
        WHERE emailUsuario='$emailOriginal'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('✅ Usuario actualizado correctamente');
            window.location.href='../crudUser.html';
          </script>";
} else {
    echo "<script>
            alert('❌ Error al actualizar: " . mysqli_error($conn) . "');
            window.location.href='../crudUser.html';
          </script>";
}

mysqli_close($conn);
?>
