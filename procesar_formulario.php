$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$destinatario = 'correo_destino@example.com';
$asunto = 'Nuevo formulario de contacto';
$mensaje = "Nombre: $nombre\nCorreo: $correo\nTeléfono: $telefono\nMensaje: $mensaje";

// Envía el correo
mail($destinatario, $asunto, $mensaje);

// Puedes redirigir al usuario a una página de confirmación después de enviar el correo.
header('Location: confirmacion.html');