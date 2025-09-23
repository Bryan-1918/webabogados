<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['descripcion']);

    // Configuración del destinatario
    $destinatario = "bryan19182016@gmail.com"; // 🔹 cambia por tu correo real
    $asunto = "Nuevo mensaje de contacto - Lex & Asociados";

    // Cuerpo del correo
    $contenido = "Has recibido un nuevo mensaje desde el formulario de contacto:\n\n";
    $contenido .= "👤 Nombre: $nombre\n";
    $contenido .= "📧 Correo: $email\n\n";
    $contenido .= "📝 Mensaje:\n$mensaje\n";

    // Cabeceras para que no caiga en SPAM
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Enviar correo
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<script>
                alert('✅ Tu mensaje ha sido enviado con éxito');
                window.location.href='../contacto.html';
              </script>";
    } else {
        echo "<script>
                alert('❌ Hubo un error al enviar el mensaje. Inténtalo de nuevo.');
                window.location.href='../contacto.html';
              </script>";
    }
} else {
    echo "<script>
            alert('❌ Acceso inválido');
            window.location.href='../contacto.html';
          </script>";
}
?>
