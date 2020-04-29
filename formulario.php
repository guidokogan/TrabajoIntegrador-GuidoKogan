<?php

$name = $_POST['nombre'];
$email = $_POST['mail'];
$message = $_POST['mensaje'];

$formcontent="De: $name \nMensaje: $message";
$recipient = "guidokogan@hotmail.com";
$subject = "Contacto";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: enviado.html');
?>
