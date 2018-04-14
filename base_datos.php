<?php

/* datos hosting */
$datos=mysql_connect("localhost", "agenciasegura.com", "fujitsu") or exit ("No se puede conectar con el servidor");
mysql_select_db("agenciasegura.com", $datos) or exit ("No se puede seleccionar la base de datos"); 
?>