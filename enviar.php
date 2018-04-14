<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['correo'];
$telefono=$_POST['telefono'];
$motivo=$_POST['motivo'];
$mensaje=$_POST['mensaje'];

/* 
echo $nombre;
echo $apellido;
echo $correo;
echo $motivo;
echo $mensaje;
*/

$destino="ventas@mesquita.com.ar";
$asunto="Mensaje enviado desde www.agenciasegura.com";
$mensaje_email="Nombre: ".$nombre."\r\n";
$mensaje_email.="Apellido: ".$apellido."\r\n";
$mensaje_email.="Correo: ".$email."\r\n";
$mensaje_email.="Telefono: ".$telefono."\r\n";
$mensaje_email.="Motivo: ".$motivo."\r\n";
$mensaje_email.="Mensaje: ".$mensaje."\r\n";

$remitente="From:$nombre $apellido <$correo>";

mail($destino, $asunto, $mensaje_correo, $remitente);

include("base_datos.php");

$conn->query("INSERT INTO consultas VALUES (0, '$nombre', '$apellido', '$email', '$telefono', '$motivo', '$mensaje')");


header("Location:precios.php?e=ok");
?>