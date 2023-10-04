<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "albertmariozaharia@gmail.com"; // Cambia esto a tu dirección de correo electrónico
    $encabezados = "From: $nombre <$email>";
    
    if (mail($destinatario, $asunto, $mensaje, $encabezados)) {
        echo "Mensaje enviado con éxito. Gracias por contactarnos.";
    } else {
        echo "Ha ocurrido un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
