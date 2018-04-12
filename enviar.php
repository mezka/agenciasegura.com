<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
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
$mensaje_correo="Nombre: ".$nombre."\r\n";
$mensaje_correo.="Apellido: ".$apellido."\r\n";
$mensaje_correo.="Correo: ".$correo."\r\n";
$mensaje_correo.="Telefono: ".$correo."\r\n";
$mensaje_correo.="Motivo: ".$motivo."\r\n";
$mensaje_correo.="Mensaje: ".$mensaje."\r\n";

$remitente="From:$nombre $apellido <$correo>";

mail($destino, $asunto, $mensaje_correo, $remitente);

include("base_datos.php");

mysql_query("INSERT INTO consultas VALUES (0, '$nombre', '$apellido', '$correo', '$telefono', '$motivo', '$mensaje')", $datos);


header("Location:precios.php?e=ok");
?>