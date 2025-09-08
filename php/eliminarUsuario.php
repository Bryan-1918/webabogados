<?php
include 'conexion.php';

$emailUsuario = $_POST['emailUsuario'];

$sql = "DELETE FROM usuarios WHERE emailUsuario = '$emailUsuario'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Usuario eliminado correctamente ✅');
            window.location.href = '../crudUser.html'; // <-- Redirige al menú del CRUD
          </script>";
} else {
    echo "<script>
            alert('❌ Error eliminando el usuario: " . mysqli_error($conn) . "');
            window.location.href = '../crudUser.html'; // <-- También redirige en caso de error
          </script>";
}

mysqli_close($conn);
?>
