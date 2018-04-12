<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Agencia Segura</title>
<link href="estilos.css" rel="stylesheet"/>
<link rel="shortcut icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width,initial-scale=1">

				
				
<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://www.myanalytics.tk/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '30fe5da807d2d9504046ace804fe639a']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->
				
		

</head>

<body>
<section id="contenedor">
	<header>
    	<div id="marca"><a href="index.php"></a></div>
       <div class="department">
				Adolfo Alsina 2501 Cap Fed. Bs As. Argentina <br>
				<span>Telefono: &nbsp;  54+11+ 4954-2224 / 4115-0800 / 49519812</span>
        </div>
        <nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="fotos.php">Fotos</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="precios.php">Precios</a></li>
            </ul>
        </nav>
        
    </header>
    <section id="contenido">
   
   <div id="mensaje" >
	<h2>contactenos </h2>
	<?php

	@$estado=$_GET['e'];

	
	if($estado=='ok') {
	?>
    
    <h3>El mensaje se envió correctamente</h3>
    <?php } else {?>
    <form id="formulario" method="POST" action="enviar.php">
    <ul>
    	<li>Nombre: <input type="text" name="nombre" required/></li>
        <li>Apellido: <input type="text" name="apellido" required /></li>
        <li>E-mail: <input type="email" name="correo" required /></li>
		<li>Telefono: <input type="text" name="telefono" maxlength="15" /></li>
        <li>Motivo del mensaje: <select name="motivo">
        <option value="consulta">Consulta</option>
        <option value="reclamo">Reclamo</option>
        <option value="presupuesto">Presupuesto</option>
        </select></li>
        <li>Mensaje: <textarea name="mensaje" rows="5"></textarea></li>
        <li><input type="submit" value="Enviar mensaje"/></li>
        
    </ul>
    </form>
    
    <?php } 
	?>
    </div>
    <div class="tel">
				Adolfo Alsina 2501 Cap Fed. Bs As. Argentina <br>
				Tel: 54+11+ 4954-2224 / 4115-0800 / 49519812
   </div>
   
	<div id="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1641.84084007474!2d-58.40161499999998!3d-34.61221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaef41e460b9%3A0xf5f192bd1fbe5aad!2sMesquita+Gustavo+Horacio!5e0!3m2!1ses-419!2sar!4v1434916789040" width="400" height="300" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="borrar"></div>
	</section>

<footer>
Desarrollado por <a href="http://www.google.com.ar" target="_new">Ivan Mesquita</a></footer>
</section>
</body>
</html>