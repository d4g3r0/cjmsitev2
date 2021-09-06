<?php

$destino = "info@colegiojuanmarcos.edu.gt";
$asunto = "Desde Web Colegio Mixto Juan Marcos";
$email = $_POST["youremail"];
$mensaje = $_POST["yourmessage"];

$contenido = "Email: " . $email . "\nMensaje: " . $mensaje;

header("Enviado desde la Pagina Web");

mail($destino,$asunto,$contenido);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>