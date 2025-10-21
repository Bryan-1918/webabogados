<?php
session_start();
include 'conexion.php';

// Verificar sesión
if (!isset($_SESSION['emailUsuario'])) {
    echo "<script>alert('Debes iniciar sesión'); window.location.href='../login.html';</script>";
    exit();
}

$abogado = $_SESSION['emailUsuario'];

$sql = "SELECT * FROM casos WHERE abogadoAsignado = '$abogado'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id_caso']."</td>
                <td>".$row['tituloCaso']."</td>
                <td>".$row['descripcion']."</td>
                <td>".$row['estado']."</td>
                <td>".$row['fechaCreacion']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No tienes casos asignados.</td></tr>";
}

mysqli_close($conn);
?>
