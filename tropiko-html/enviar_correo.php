<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    
    // Configurar el destinatario y el asunto del correo
    $destinatario = 'shiningcopr@gmail.com';
    $asunto = 'Nuevo mensaje del formulario de contacto';
    
    // Construir el contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Correo Electrónico: $correo\n";
    $contenido .= "Mensaje: $mensaje\n";
    
    // Enviar el correo
    ini_set("SMTP","localhost");
    ini_set("sendmail_from","$correo");
    $to = 'destinatario@example.com';
    $subject = 'Prueba de correo';
    $message = 'Este es un correo de prueba enviado desde XAMPP.';
    $headers = 'From: '.$correo. "\r\n" .
               'Reply-To: '.$correo. "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo 'El correo ha sido enviado correctamente.';
    } else {
        echo 'Error al enviar el correo.';
    }
}
?>
