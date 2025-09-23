<?php
// Esta clase es para editar los usuarios desde el crud con superadmin
include 'conexion.php';

if (isset($_GET['email'])) {
    $emailUsuario = $_GET['email'];

    $sql = "SELECT * FROM usuarios WHERE emailUsuario = '$emailUsuario'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body class="bg-light">
  <div class="container my-5">
    <div class="card shadow p-4" style="max-width: 500px; margin:auto;">
      <h2 class="text-center mb-4">Editar Usuario</h2>
      <form action="updateUsuario.php" method="post">
        <input type="hidden" name="emailOriginal" value="<?php echo $row['emailUsuario']; ?>">

        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombreUsuario" value="<?php echo $row['nombreUsuario']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellidoUsuario" value="<?php echo $row['apellidoUsuario']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Correo</label>
          <input type="email" class="form-control" name="emailUsuario" value="<?php echo $row['emailUsuario']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Teléfono</label>
          <input type="text" class="form-control" name="telUsuario" value="<?php echo $row['telUsuario']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Rol</label>
          <select class="form-select" name="tipoUsuario" required>
            <option value="Administrador" <?php if($row['tipoUsuario']=="Administrador") echo "selected"; ?>>Administrador</option>
            <option value="Usuario" <?php if($row['tipoUsuario']=="Abogado") echo "selected"; ?>>Abogado</option>
            <option value="Usuario" <?php if($row['tipoUsuario']=="Usuario") echo "selected"; ?>>Usuario</option>
          </select>
        </div>
        <button type="submit" class="btn w-100" style="background-color: var(--accent); color: white;">Actualizar</button>
      </form>
    </div>
  </div>
</body>
</html>
<?php
    } else {
        echo "<script>alert('Usuario no encontrado'); window.location.href='../editarUsuarios.html';</script>";
    }
} else {
    echo "<script>alert('No se seleccionó usuario'); window.location.href='../editarUsuarios.html';</script>";
}

mysqli_close($conn);
?>