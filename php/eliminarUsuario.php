<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailUsuario = $_POST['emailUsuario'];

    $sql = "DELETE FROM usuarios WHERE emailUsuario = '$emailUsuario'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Usuario eliminado correctamente'); window.location.href='listarUsuarios.php';</script>";
    } else {
        echo "Error eliminando usuario: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
