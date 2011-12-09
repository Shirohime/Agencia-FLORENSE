<?php 
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

<!--<link rel="stylesheet" href="css/reset.css" />-->
 <link rel="stylesheet" href="css/styles.css" />
 
 <link rel="stylesheet" type="text/css" href="css/demo.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/slide.css" media="screen" />
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>



 <link type="text/css" href="menu.css" rel="stylesheet" />
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
    
    <script type="text/javascript" src="js/easySlider1.7.js"></script>
    
    <script type="text/javascript" src="menu.js"></script>
    
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide1.js" type="text/javascript"></script>
    
    <script language="JavaScript">
			function maximaLongitud(texto,maxlong) {
			var tecla, in_value, out_value;

			if (texto.value.length > maxlong) {
			in_value = texto.value;
			out_value = in_value.substring(0,maxlong);
			texto.value = out_value;
			return false;
			}
			return true;
			}
	</script>

    
    <script type="text/javascript" src="js/easySlider1.7.js"></script>
    
    
    <script type="text/javascript">
	
	$(document).ready(function(){	
	$("#slider").easySlider({
		auto: true,
		continuous: true 
	});
    });
    
    </script>
    <!--
    	<script type="text/javascript">
		$(document).ready(function(){
			$('.menuitem img').animate({width: 100}, 0);
			$('.menuitem').mouseover(function(){
					gridimage = $(this).find('img');
					gridimage.stop().animate({width: 200}, 150);
				}).mouseout(function(){
					gridimage.stop().animate({width: 100}, 150);
			});
		}); 
	</script>-->
<!--<style type="text/css">
		*{ padding:0; margin:0; }
		img{ border: none; -ms-interpolation-mode: bicubic; }
		body{ padding:10; text-align:center; }
		
		#wrapper{
	position:absolute;
	margin-top:250px;
	margin-left:10px;
	left:20%;
	padding-top:10px;
	width:650px;
	top: 11px;
}
		
		#menuwrapper{ position:relative; height:200px;}
			#menu1{
	position:absolute;
	bottom:279px;
	left:-8px;
	width: 831px;
	height: 297px;
}*/
				.menuitem{ position:fixed relative; bottom:0px; display:inline-block; }
				
				/*Build Internet Demo Page Only*/
					#buildinternet-link{
						z-index: 10;
						width: 100%;
						height: 40px;
						text-align: center;
						/*background: #000 url("http://www.buildinternet.com/live/imagefill/bi-demo-branding.jpg") no-repeat 5px 5px;*/
						position: absolute;
						bottom: 0;
						left:0px;
						
					}
					#buildinternet-link p{
						padding: 10px;
						font-size: 14px;
						color: #CCC;
						font-family:arial, sans-serif;
					}
					#buildinternet-link a{
						color: #A7D7E9;
					}
					
	</style>-->
    
<!--Modificación Glox-->

<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menuitem img').animate({width: 100}, 0);
			$('.menuitem').mouseover(function(){
					gridimage = $(this).find('img');
					gridimage.stop().animate({width: 200}, 150);
				}).mouseout(function(){
					gridimage.stop().animate({width: 100}, 150);
			});
		}); 
		
$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});

	</script>
<style type="text/css">
/*body{
	 /*background:#202020;*/ /*color de fondo cambiarlo no se q color*/
	 /*font:bold 12px Arial, Helvetica, sans-serif;
	 margin:0;
	 padding:0;
	 min-width:960px;
	 /*color:#bbbbbb;*/ 
/*}*/

.container {width: 960px; height:1200px; margin: 0 auto; overflow: hidden;}

#content {	float: left; width: 100%; height:1200;}

.post { margin: 0 auto; padding-bottom: 50px; float: left; width: 960px; }

.btn-sign {
	width:660px;
	margin-bottom:20px;
	margin:0 auto;
	padding:20px;
	border-radius:5px;
	background: -moz-linear-gradient(center top, #E2ECEE, #fff); /*#05BBED*/
	-moz-border-radius: 6px 6px 6px 6px;
    -moz-box-shadow: 5px 5px 10px #78D8F2;
    background: -webkit-gradient(linear, left top, left bottom, from(#00c6ff), to(#018eb6));
	background:  -o-linear-gradient(top, #00c6ff, #018eb6);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#00c6ff', EndColorStr='#018eb6');
	text-align:center;
	font-size:36px;
	color:#fff;
	text-transform:uppercase;
}

.btn-sign a { color:#fff; text-shadow:0 1px 2px #161616; }

#mask {
	display: none;
	/*background: #000; */
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: 0.6;
	z-index: 999;
}

.login-popup{
	display:none;
	background: #414958 ; /*#E2ECEE*/
	color: #000;
	padding: 10px; 	
	/*border: 2px solid #ddd;*/
	opacity: 0.75;
	-moz-border-radius: 6px 6px 6px 6px;
    -moz-box-shadow: 5px 5px 10px #78D8F2;
	text-align:center;
	float: left;
	margin-left:-200px;
	width:600px;
	font-size: 12px;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #FFF;
	-moz-box-shadow: 0px 0px 20px #FFF; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #FFF; /* Safari, Chrome */
	border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}

img.btn_close {
	float: right; 
	size: 5px;
	margin: -28px -28px 0 0;
}
		*{ padding:0; margin:0; }
		img{ border: none; -ms-interpolation-mode: bicubic; left:50%; }
		/*body{ padding:10; text-align:center; background:#fafafa; }*/
		
		#wrapper{
	position:absolute;
	left:20%;
	padding-top:100px;
	width:950px;
	top: 20px;
}
		
		#menuwrapper{ position:relative; height:200px;}
			#menu1{
	position:absolute;
	bottom:279px;
	left:-8px;
	width: 831px;
	height: 297px;
}
				.menuitem{ position:fixed relative; bottom:0px; display:inline-block; }
				
				/*Build Internet Demo Page Only*/
					#buildinternet-link{
						z-index: 10;
						width: 100%;
						height: 40px;
						text-align: center;
						background: #000 url("http://www.buildinternet.com/live/imagefill/bi-demo-branding.jpg") no-repeat 5px 5px;
						position: absolute;
						bottom: 0;
						left:0px;
						
					}
					#buildinternet-link p{
						padding: 10px;
						font-size: 14px;
						color: #CCC;
						font-family:arial, sans-serif;
					}
					#buildinternet-link a{
						color: #A7D7E9;
					}
					
					#tit{
						color:#05bbed ;
						font-size:19px;}
					
	</style>

<!--Termina modificacion-->    
    
    

<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #414958;
	margin: 0;
	padding: 0;
	color: #000;
	background-color: #414958;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
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
	height:1210px;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 780px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	background: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño. No es necesario si establece la anchura de .container en el 100%. */
}

/* ~~no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado~~ */
.header {
	background: #414958;
}

/* ~~ Esta es la información de diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de la div. Los elementos situados dentro de esta div tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

*/
.content {
	padding: 10px 10px 0px 0px;
	filter:alpha(opacity=80);
	-moz-opacity:.80;
	opacity:.80;
	width:1000px;
	height:900px;
	text-align:center;
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	/*padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
	width:1000px;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background: #414958;
	color:#C0C0C0;
}

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}


#content {
width: 940px;
height: 900px;
margin-right: auto;
margin-left: auto;
text-align: left;
overflow: hidden;
overflow-x: hidden;
overflow-y: hidden;
}



fieldset { 
	border:none; 
}

form.signin .textbox label { 
	display:block; 
	padding-bottom:7px; 
}

form.signin .textbox span { 
	display:block;
}

form.signin p, form.signin span { 
	color:#FFF; 
	font-size:11px; 
	line-height:18px;
} 

form.signin .textbox input { 
	/*background:#666666; */
	border-bottom:1px solid #333;
	border-left:1px solid #000;
	border-right:1px solid #333;
	border-top:1px solid #000;
	color:#fff; 
        border-radius: 3px 3px 3px 3px;
	-moz-border-radius: 3px;
        -webkit-border-radius: 3px;
	font:13px Arial, Helvetica, sans-serif;
	padding:6px 6px 4px;
	width:200px;
}

form.signin input:-moz-placeholder { color:#bbb; text-shadow:0 0 2px #000; }
form.signin input::-webkit-input-placeholder { color:#bbb; text-shadow:0 0 2px #000;  }

.button { 
	background: -moz-linear-gradient(center top, #f3f3f3, #dddddd);
	background: -webkit-gradient(linear, left top, left bottom, from(#f3f3f3), to(#dddddd));
	background:  -o-linear-gradient(top, #f3f3f3, #dddddd);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f3f3f3', EndColorStr='#dddddd');
	border-color:#000; 
	border-width:1px;
        border-radius:4px 4px 4px 4px;
	-moz-border-radius: 4px;
        -webkit-border-radius: 4px;
	color:#333;
	cursor:pointer;
	display:inline-block;
	padding:6px 6px 4px;
	margin-top:10px;
	font:12px; 
	width:214px;
}
.button:hover { background:#ddd; }

#textologin{
	margin-left:600px;
	margin-top:-400px;
	}

-->

#copyr{
	font-family:Microsoft Yi Baiti;
	color:#2A3F55;
	font-size:20px;
	font-weight:bold;
}


/* breadcrumbs --------------------------------------------------------*/

#breadcrumbs{
	position: absolute;
	/*bottom: 11px;*/
	left: 30px;
	font-style: italic;
	color: #05bbed;
	font-size: 10px;
	margin-left: 100px;
	margin-top:-20px;
}

#breadcrumbs a{
	color: #FFF; /*#bfbdbd*/
	text-decoration: none;
	/*background: url(Imagenes/breadcrumb-slash.png) no-repeat top right;*/
	padding-right: 10px;
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
        
          <img src="Imagenes/logo.jpg" alt="Logo" name="Insert_logo" width="181" height="114" id="Insert_logo" style="background: 				          #8090AB; display:block;"/>
          
           <!-- Navigation Menu -->
    
   		 <div id="menu">
    	 <ul class="menu">
        	<li><a href="quienes.php" class="parent"><span>¿Quiénes Somos?</span></a>
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
                        </li>
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

<!--<br />

  
  <div class="hr grid_12">&nbsp;</div>
  
  <br /><br />-->
          
    </a>
     
       
         <!-- Breadcrumb-->
                <div id="breadcrumbs">
                    <a title="Home" href="index.php">Home</a>&nbsp;/&nbsp;
                    Servicios
                </div>
			<!-- ENDS Breadcrumb-->	 
    
  
  
  
  
  <!-- end .header --></div>

  
  <div class="content" id="content" >
  
	<div id="wrapper" style="margin-top:200px;">
		<img src="Imagenes/SERV.jpg"/>
		<div id="menuwrapper">
			<div id="menu1">
            <div class="btn-sign">
             <div  class= class="menuitem">
				<a href="#login-box" class="login-window"><img src="Imagenes/atencion.jpg" alt="Atencion a personas de la tercera edad" width="536" height="196" style="width:20%; height: 20%; border:2px #414958;" title="atencion"/></a>
                
        		<a href="#login-box0" class="login-window"><img src="Imagenes/ancianos.jpg" alt="Atencion" width="240" height="240" style="width:20%; height:20%; border:2px #414958;" title="Atencion a Personas de la tercera edad" /></a>
                
			<a href="#login-box1" class="login-window"><img src="Imagenes/aplicacionmedybi.jpg" alt="Aplicacion" width="240" height="240" style="width:20%; height: 20%; border:2px #414958;" title="Aplicacion de tratamientos medicos y biologicos" /></a>
            
			<a href="#login-box2" class="login-window"><img src="Imagenes/aplicacionsuero.jpg" alt="Aplicacionsuero" width="240" height="240"  style="width:20%; height:20%; border:2px #414958;" title="Aplicacion de suero" /></a>
            
			<a href="#login-box3" class="login-window"><img src="Imagenes/cateter.jpg" alt="cateter" width="240" height="240" style="width:20%; height:20%; border:2px #414958;" title="Instalacion de cateterismo" /></a>
            
			<a href="#login-box4" class="login-window"><img src="Imagenes/cirugiacara.jpg" alt="cirugia" width="240" height="240" style="width:20%; height: 20%; border:2px #414958;" title="Cuidado de pacientes con cirugia de cara, entre otros" /></a>
            
			<a href="#login-box5" class="login-window"><img src="Imagenes/condiscapacidad.jpg" alt="Atencion a personas con discapacidad"  width="536" height="196" style="width: 20%;height: 20%; border:2px #414958;" title="Atencion a personas con discapacidad"/></a>
            
			<a href="#login-box6" class="login-window"><img src="Imagenes/diabetes.jpg"alt="diabetes" width="536" height="196" style="width:20%; height: 20%; border:2px #414958;" title="Atencion a personas con Diabetes"/></a>
            
			<a href="#login-box7" class="login-window"><img src="Imagenes/dialisisperi.jpg" alt="Dialisis" width="536" height="196" style="width:20%;height: 20%; border:2px #414958;" title="Dialisis Peritonial"/></a>
            
			<a href="#login-box8" class="login-window"><img src="Imagenes/enfermoterm.jpg" alt="Enfermoterm" width="536" height="196" style="width:20%; height: 20%; border:2px #414958;" title="Atencion a enfermos terminales"/></a>
            
			<a href="#login-box9" class="login-window"><img src="Imagenes/esponja.jpg" alt="Esponja" width="536" height="196" style="width: 20%; height:20%; border:2px #414958;" title="Baños de esponja"/></a>
            
			<a href="#login-box10" class="login-window"><img src="Imagenes/fracturas.jpg" alt="Fracturas" width="536" height="196" style="width:20%; height:20%; border:2px #414958;" title="Atencion de fracturas"/></a>
            
			<a href="#login-box11" class="login-window"><img src="Imagenes/hipertensos.jpg" alt="Hipertension" width="536" height="196" style="width:20%; height:20%; border:2px #414958;" title="Atención a pacientes Hipertensos"/></a>
            
            </div>
            <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit"> Atencion a personas de la tercera edad</h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Especializada y con el mejor personal, para cubrir las necesidades
                de las personas de la tercera edad</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
    <div id="login-box0" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Atencion y cuidado </h2> </span>
                </label>
                <p>
                <label class="cuerpo">
                <span>A personas de que no pueden ser vigiladas o atendidas por sus familiares
                y no quieren instalarlos en una casa de reposo.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box1" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Aplicacion de tratamientos medicos y biologicos </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Lo primero que se debe hacer es tratar de identificar el tipo de serpiente que ocasion
                la mordedura, verificar si la persona fue efectivamente mordida, y monitorear la severidad del 
                envenamiento basandose en los signos y sintomas que presente el paciente.
                En el tratamiento pueden tenerse dos situaciones totalmente diferentes: a) la 
                aplicacion del antiveneno en condiciones de campo y b) la terapia a nivel hospitalario.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box2" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Aplicacion de suero </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span> Lo primero que se debe hacer es tratar de identificar el tipo de serpiente que ocasion
                la mordedura, verificar si la persona fue efectivamente mordida, y monitorear la severidad del 
                envenamiento basandose en los signos y sintomas que presente el paciente.
                En el tratamiento pueden tenerse dos situaciones totalmente diferentes: a) la 
                aplicacion del antiveneno en condiciones de campo y b) la terapia a nivel hospitalario. </span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box3" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Instalacion de cateterismo </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>El cateterismo vesical o uretral es la introducción de una sonda,
                a través de la uretra al interior de la vejiga urinaria con fines
                diagnósticos y terapéuticos.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box4" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Cuidado de pacientes con cirugia de cara, entre otros </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Cirugía estética de los párpados y las cejas
                Cirugía del envejecimiento facial
                Cirugía estética de la nariz
                Cirugía estética del mentón y de los malares
                Cirugía estética de las orejas
                Cirugía estética de las mamas
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box5" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Atencion a personas con discapacidad </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Las personas con discapacidad intelectual necesitan
                        asistencia y/o ayuda importante para realizar
                        actividades de la vida diaria. El nivel de
                        autonomía que tengan determinará la intensidad
                        de esa asistencia, que traduciremos en cuidados.
                        Estos cuidados se darán, por lo general, en
                        todas las etapas de la vida de la persona</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box6" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Atencion a personas con Diabetes </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>La inyección deberá de realizarse completamente después de cargar la jeringilla .
                 Antes se debe de limpiar la piel con un algodón y alcohol . Con los dedos indice y pulgar de la mano izquierda se pellizcará la piel y el tejido subcutáneo, 
                 formando un pliegue donde se introducirá la aguja perpendicular u oblicua ligeramente según la zona .
                 La inyección será subcutánea  , en la grasa que hay por debajo de la piel .</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box7" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Dialisis Peritonial </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>La diálisis peritoneal (DP) utiliza una membrana natural -el peritoneo- como filtro. 
                El fluido de diálisis se introduce en la cavidad peritoneal a través de un pequeño tubo flexible que previamente se implantó en el
                abdomen de forma permanente, en una intervención quirúrgica menor. Parte de este tubo, o catéter, permanece fuera del abdomen. 
                De esta forma puede conectarse a las bolsas de solución de diálisis. 
                El catéter queda oculto bajo la ropa.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box8" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Atencion a enfermos terminales </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>En torno al paciente terminal se centra buena parte de los problemas éticos más importantes con los que debe enfrentarse el médico. 
                Constituye una paradoja que una de las carencias que las facultades de medicina permiten al estudiante que concluye sus estudios de pregrado
                 sea la referida al aprendizaje de todo lo concerniente con el proceso de morir.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box9" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Baños de esponja </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Es la limpieza general que se proporciona a un paciente a su cama cuando 
                no puede o no le está permitido bañarse en regadera o tina.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box10" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Atencion de fracturas </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Una fractura es la ruptura total o parcial de un hueso. Se debe a una caída, 
                golpes fuertes o la contracción violenta de un músculo.
                Existen dos tipos de fracturas, las cerradas que son en las que el hueso se rompe 
                pero la piel permanece intacta, y aquellas cuando la herida está abierta y el hueso 
                fracturado está expuesto.</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
        <div id="login-box11" class="login-popup">
        <a href="#" class="close"><img src="Imagenes/boton-cerrar.png" class="btn_close" title="Close Window" alt="Cerrar" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="titulo">
                <span> <h2 id="tit">Atención a pacientes Hipertensos </h2></span>
                </label>
                <p>
                <label class="cuerpo">
                <span>Esta labor implica detectar, resolver y prevenir los problemas relacionados 
                con los medicamentos (PRM). Para llevar a cabo esta función se debe establecer un
                plan de atención que implique todas aquellas funciones encaminadas a ayudar a un 
                paciente a alcanzar una meta de salud determinada</span>
                </label>    
                 </p>         
                </fieldset>
          </form>
		</div>
    </div>
</div>
</div>
			</div>
		
 

  <!-- end .content -->  
  </div>
  <!-- 
  <br /><br />
  <div class="footer">
  <!--<br />
		<center>
        <div id="footer-in">
        	<br /> 
  			<div class="hr grid_12 clearfix">&nbsp;</div>
   			<br /><br /> 
			<p>Copyright © 2011 Register. All right reserved</p>
		</div>
        </center>    <!-- end .footer --><!--</div>-->
<!-- end .container --><!--</div>

<!--<center><p id="copyr">Copyright © 2011 Register. All right reserved</p></center>-->

</div>

</body>
</html>
