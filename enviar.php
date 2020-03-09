<?php 

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "yuliverjimenez@gmail.com";
$asunto = "CONTACTO DESDE MI WEB";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando mensaje
mail($destinatario, $asunto, $carta);

header('Location: mensaje-de-envio.html');


 ?>