<?php
// Obteniendo datos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "jaseftgaimer19@gmail.com";
$asunto = "Contacto desde el sitio web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: Telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviar mensaje
mail($destinatario, $asunto, $carta);
header('Location:Contactanos.html')
?>