<?php
// eliminar usuario desde el CRUD con botón
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["nombreUsuario"]."</td>
            <td>".$row["apellidoUsuario"]."</td>
            <td>".$row["emailUsuario"]."</td>
            <td>".$row["telUsuario"]."</td>
            <td>".$row["tipoUsuario"]."</td>
            <td>
                <a href='./php/eliminarUsuario.php?email=".$row["emailUsuario"]."' 
                    class='btn btn-sm btn-danger'
                    onclick=\"return confirm('¿Seguro que deseas eliminar este usuario?');\">
                    Eliminar
                </a>
            </td>
          </tr>";       
    }
}else {
        echo "<tr><td colspan='7'> No hay usuarios registrados</td></tr>";
}

mysqli_close($conn)

?>