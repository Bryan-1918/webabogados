<?php
// Lista de usuarios desde el CRUD
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["nombreUsuario"]."</td>
            <td>".$row["apellidoUsuario"]."</td>
            <td>".$row["emailUsuario"]."</td>
            <td>".$row["telUsuario"]."</td>
            <td>".$row["tipoUsuario"]."</td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='7'>No hay usuarios registrados</td></tr>";
}

mysqli_close($conn);
?>
