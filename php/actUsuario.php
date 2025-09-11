<?php
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>
            <td>".$row["cont"]."</td>
            <td>".$row["nombreUsuario"]."</td>
            <td>".$row["apellidoUsuario"]."</td>
            <td>".$row["emailUsuario"]."</td>
            <td>".$row["telUsuario"]."</td>
            <td>".$row["tipoUsuario"]."</td>
            <td>
              <a href='./php/editarUsuario.php?email=".$row["emailUsuario"]."' class='btn btn-sm btn-primary'>Editar</a>
            </td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='7'>No hay usuarios registrados</td></tr>";
}

mysqli_close($conn);
?>
