<?php

/* datos hosting */
$datos=mysql_connect("mysql.hostinger.com.ar", "u909794411_ivan", "123456") or exit ("No se puede conectar con el servidor");
mysql_select_db("u909794411_prog", $datos) or exit ("No se puede seleccionar la base de datos"); 
?>