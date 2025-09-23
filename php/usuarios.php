<?php
// Verificar el login dependiendo del tipo de usuario
session_start();
include 'conexion.php';

$emailUsuario = $_POST['emailUsuario'];
$passUsuario  = $_POST['passUsuario'];

$sql = "SELECT * FROM usuarios WHERE emailUsuario = '$emailUsuario'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verificar la contraseña encriptada
    if (password_verify($passUsuario, $row['passUsuario'])) {
        // Guardar sesión
        $_SESSION['emailUsuario'] = $row['emailUsuario'];
        $_SESSION['tipoUsuario']  = $row['tipoUsuario'];

        switch ($row['tipoUsuario']) {
            case "Superadmin":
                header('location: ../crudUser.html');
                break;
            case "Administrador":
                header('location: ../adminDashboard.html');
                break;
            case "Abogado":
                header('location: ../abogadoDashboard.html');
                break;
            case "Usuario":
                header('location: ../clienteDashboard.html');
                break;
            default:
                header('location: ../index.html');
        }
    } else {
        echo "<script>alert('❌ Contraseña incorrecta'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('❌ Usuario no encontrado'); window.history.back();</script>";
}

mysqli_close($conn);
?>
