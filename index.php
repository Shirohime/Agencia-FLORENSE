<?php
	session_start();
	require('conexion.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>FLORENSE: Agencia de Enfermeria</title>

<LINK REL="SHORTCUT ICON" href="Imagenes/icono.png">
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->

<!-- <link rel="stylesheet" href="css/reset.css" /> -->
 <link rel="stylesheet" href="css/styles.css" />


<link rel="stylesheet" type="text/css" href="css/demo.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/slide.css" media="screen" />
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


 <link type="text/css" href="menu.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="css/style1.css" type="text/css" media="screen" /> -->
<!-- <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" /> -->
 
 <link rel="stylesheet" type="text/css" href="css/jquery.ad-gallery.css">


 
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
    
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide1.js" type="text/javascript"></script>

    
    <script type="text/javascript" src="js/easySlider1.7.js"></script>
    <script type="text/javascript">
	
	$(document).ready(function(){	
	$("#slider").easySlider({
		auto: true,
		continuous: true 
	});
    });
    
    </script>
    
<style type="text/css">

  select, input, textarea {
    font-size: 1em;
  }

  .example {
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  ul#lista {
    list-style-image:url(list-style.gif);
  }
  pre {
    font-family: "Lucida Console", "Courier New", Verdana;
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  code {
    font-family: "Lucida Console", "Courier New", Verdana;
    margin: 0;
    padding: 0;
  }

  #gallery {
    padding: 30px;
    background: url(Imagenes/fondo4.jpg); /*Color azulito del fondo del rectangulo de del content: #e1eef5 */ /*Ultimo color: #FFF*/ /*#414958*/
	width:800px;
	height:450px;
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 640px;
    padding: 10px;
    overflow: hidden;
  }
    #descriptions .ad-image-description {
      position: absolute;
    }
      #descriptions .ad-image-description .ad-description-title {
        display: block;
      }
  .welcome {
  	background: #BCF5A9; /* url(../exclamation.png) center no-repeat; */
	background-position: 15px 50%; /* x-pos y-pos */
	text-align: left;
	padding: 5px 20px 5px 45px;
	border-top: 2px solid #ffd324;
	border-bottom: 2px solid #ffd324;
  }    
      
  </style>
    

<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: url(Imagenes/fondo4.jpg); /*Era #6495ED*/
	margin: 0;
	padding: 0;
	color: #000;
	/*background-color: #FFF ;/*Era #FFF*/
	
	/*#7AC5CD*/
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}

a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color:#414958;
	/*text-decoration: underline;*/ /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #4E5869;
	/*text-decoration: underline;*/
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	/*text-decoration: none;*/
}

/* ~~ este contenedor rodea a todas las demás divs, lo que les asigna su anchura basada en porcentaje ~~ */
.container {
	width: 80%;;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 780px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	background: #FFF;/*Color de fondo del container, era blanco*/ /*Despues el azulito #e1eef5*/ /*Ultimo color: #414958 */
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño. No es necesario si establece la anchura de .container en el 100%. */
}

/* ~~no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado~~ */
.header {
	background: #414958; /*Era #FFF*/
}

/* ~~ Esta es la información de diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de la div. Los elementos situados dentro de esta div tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

*/
.content {
	padding: 60px 0px 60px 0px;
	filter:alpha(opacity=80);
	-moz-opacity:.80;
	opacity:.80;
	/*width:700px;*/
	/*text-align:center;*/
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	/*padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
	width:1000px;
}

/* ~~ El pie de página ~~ */

/*
.footer {
	padding: 10px 0;
	background: url(Imagenes/fondo4.jpg); Color: #FFF
	color:#C0C0C0;
}
*/

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br > o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

#title1{
	text-align:left;
	font-size:20px;
	color:#FFF;
	/*font-family:Lucida Calligraphy;*/
	font-weight:bold;
	/*font-style:italic;*/
	float:left;
	margin-left:80px;
}

#open{
	font-size:10px;}
	
#copyr{
	font-family:Microsoft Yi Baiti;
	color:#2A3F55;
	font-size:20px;
	font-weight:bold;
}

</style>



</head>

<body>






<br />
<div class="container">
    	
        
         <div class="header">
     
          <br />
          <br />
          
          <a href="index.php">
        
          <img src="Imagenes/logo.jpg" alt="Logo" name="Insert_logo" width="181" height="114" id="Insert_logo" style="background:#8090AB; display:block;"/>
          
           <!-- Navigation Menu -->
    
   		 <div id="menu">
    	 <ul class="menu">
        	<li><a href="quienes.php" class="parent"><span>¿Quiénes Somos?</span></a><!---->
            <div><ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <div><ul>
                        <li><a href="#" class="parent"><span>Sub Item 1.1</span></a>
                            <div><ul>
                                <li><a href="#"><span>Sub Item 1.1.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.1.2</span></a></li>
                            </ul></div>
                        </li>
                            <div><ul>
                                <li><a href="#"><span>Sub Item 1.7.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.7.2</span></a></li>
                            </ul></div>
                    </ul></div>
                </li>
                <li><a href="#"><span>Sub Item 2</span></a></li>
            </ul></div>
            </li>
        <li><a href="servicios.php" class="parent"><span>¿Qué ofrecemos?</span></a>
            <div><ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <div><ul>
                        <li><a href="#"><span>Sub Item 1.1</span></a></li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                    </ul></div>
                </li>
                <li><a href="#" class="parent"><span>Sub Item 2</span></a>
                    <div><ul>
                        <li><a href="#"><span>Sub Item 2.1</span></a></li>
                        <li><a href="#"><span>Sub Item 2.2</span></a></li>
                    </ul></div>
                </li>
            </ul></div>
        </li>
        <li><a href="blog.php"><span>Trabajo</span></a></li>
        <li><a href="cuestionario.php"><span>Eval&uacute;a a las Enfermeras</span></a></li>
        <li><a href="hola.php"><span>Contacto</span></a></li>
        <li class="last"><a href="registro.php"><span>Registro</span></a></li>
    </ul>
</div>

<br />

<!--  
  <div class="hr grid_12">&nbsp;</div>
  
  <br /><br />-->
          
    </a>
 
  
  
  <!-- end .header -->   
  </div>     
         
    
  
  
  
  
  

 
  <center><div class="content">

 <?php
 	if( isset($_SESSION['conectado']) ){
 		if( $_SESSION['conectado'] == 'logueado' ){
 			?>
 			<div class="welcome">
 				<p>Bienvenido <?php echo $_SESSION['username']; ?> </p>
 			</div>
 			<?php
 		} else {
 			//si quieres poner algo cuando no esta logueado
 		}
 	}
 ?>
  <h1 id="title1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... Atención de calidad con calidez ...</h1>
  <br /><br /><br /><br />
  
      <center><div id="gallery" class="ad-gallery">
      <br />
        <div id="slider" style="overflow:hidden;  ">
			<ul style=" overflow:hidden; "> 
				<li style="float: left; ">
					<a href="">
						<!--<span>Instalaci&oacute;n de Suero</span>-->
						<img src="Imagenes/Suero.JPG" alt="Instalacion de Suero" width="700" height="400" />
					</a>
				</li>  
				<li style=" overflow:hidden; float: left;">
					<a href="">
						<!--<span>Curaci&oacute;n de Herida Quir&uacute;rgica</span>-->
						<img src="Imagenes/HeridaQuirurgica.jpg" alt="" width="700" height="400" />
					</a>	
				</li>  
				<li style="overflow:hidden; float: left;">
					<a href="">
						<img src="Imagenes/RetiroDePuntos.jpg"  alt="" width="700" height="400" />
					</a>
				</li>  
				<li style="overflow:hidden; float: left;">
					<a href="">
						<!--<span>Ba&ntilde;o de Esponja</span>-->
						<img src="Imagenes/BañosEsponja.jpg"  alt="" width="700" height="400" />
					</a>
				</li>  
				<li style="overflow:hidden; float: left;">
					<a href="">
						<!--<span>Instalaci&oacute;n de Sonda Nazog&aacute;strica</span>-->
						<img src="Imagenes/sondaNazograstica.bmp" alt="" width="700" height="400" />
					</a>
				</li>  
			</ul> 
		</div>
	  </center>
    </div></center>
		
    <!-- end .content -->
	</div>
   
   
   
  <div class="footer">
  <br />
		<center>
        <div id="footer-in">
        	<br /> 
  			<!--<div class="hr grid_12 clearfix">&nbsp;</div>-->
			<p id="copyr">Copyright © 2011 Register. All right reserved</p>
		</div>
        </center>  
	</div>	  
		<!-- end .footer -->
<!-- end .container --></div>

</body>
</html>
