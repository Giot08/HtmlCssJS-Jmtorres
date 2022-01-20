<?php

$destino = "xgiot08@gmail.com";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "ENVIO DESDE JMTORRES.CL";
$mensajeCompleto = "\n Nombre :" . $nombre . "\n" . "Email :" . $email . "\n" . "Télefono :" . $telefono . "\n" . "Asunto :" . $asunto . "\n" . "Mensaje :" . $mensaje;

mail ($destino, $asunto, $mensajeCompleto, $header);
header('Location: mail_send.html');