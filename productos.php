<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Agencia Segura</title>
<link href="estilos.css" rel="stylesheet"/>
<link rel="shortcut icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- Instalamos Libreria JQuery-->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <!-- Instalamos las funciones de la aplicacion-->
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />

    <script type="text/javascript">
        $(document).ready(function(){
            $(".fancybox").fancybox({
                loop : true,
                padding : 5,
                margin  : 5,
                openEffect  : 'elastic',
                autoResize  : false,
                
            });
        });

        /*
        $(function(){
            $(".fancybox").fancybox({});
        });
        */



    </script>
	
					
				
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
    <h2>Productos</h2>
    <ul id="galeria">
    	<li>
            <a href="imagenes/galeriaproductoagencia/foto_1.jpg"title="bandeja pasa dinero" class="fancybox" rel="galeria1" >
            	<img src="imagenes/galeriaproductoagencia/foto_1.jpg" class="ajustarimg"/>
            </a>
        </li>
        <li>
            <a href="imagenes/galeriaproductoagencia/foto_2.jpg" title="malla superior" class="fancybox" rel="galeria1">
            	<img src="imagenes/galeriaproductoagencia/foto_2.jpg" class="ajustarimg"/>
            </a>
        </li>
        <li>
            <a href="imagenes/galeriaproductoagencia/foto_3.jpg" title="modulo blindaje ciego" class="fancybox" rel="galeria1">
            	<img src="imagenes/galeriaproductoagencia/foto_3.jpg" class="ajustarimg" />
            </a>
        </li>
        <li>
            <a href="imagenes/galeriaproductoagencia/foto_4.jpg" title="modulo blindaje lateral vidriera" class="fancybox" rel="galeria1">
            	<img src="imagenes/galeriaproductoagencia/foto_4.jpg" class="ajustarimg" />
            </a>
        </li>
        <li>
            <a href="imagenes/galeriaproductoagencia/foto_5.jpg" title="modulo blindaje lateral mostrador" class="fancybox" rel="galeria1" >
            	<img src="imagenes/galeriaproductoagencia/foto_5.jpg" class="ajustarimg" />
            </a>
        </li>
        <li>
            <a href="imagenes/galeriaproductoagencia/foto_6.jpg" title="modulo puerta blindada accesos cabina" class="fancybox" rel="galeria1" >
            	<img src="imagenes/galeriaproductoagencia/foto_6.jpg" class="ajustarimg" />
            </a>
        </li>
       
    </ul>
<div class="borrar"></div>   
   </section>

<footer>
Desarrollado por <a href="http://www.google.com.ar" target="_new">Ivan Mesquita</a></footer>
</section>
</body>
</html>