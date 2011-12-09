<?php
session_start();
require('conexion.php');
if ($_POST['action'] == "checkdata") {
    if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {
		?>
		<script type="text/javascript" >alert('Enviado');</script>
        <?php
    } else {
		?>
        <script type="text/javascript" >alert('No enviado');</script>
        <?php
    }
    exit;
}
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
    
    <style type="text/css">
  	iframe{margin: 0 auto 0 auto;}
    </style>
    
    

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
	height: 1050px;
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
	filter:alpha(opacity=50);
	-moz-opacity:.50;
	opacity:.50;
	width:1000px;
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
height: 800px;
margin-right: auto;
margin-left: auto;
text-align: left;
overflow: hidden;
overflow-x: hidden;
overflow-y: hidden;
}



/* Mask for background, by default is not display */
#mask {
	display: block;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: 0.4;
	z-index: 999;
}

/* You can customize to your needs  */
.login-popup{
	display:inline-block;
	background: #333;
	padding: 10px; 	
	border: 2px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 60%; left: 30%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #999; /* CSS3 */
        -moz-box-shadow: 0px 0px 20px #999; /* Firefox */
        -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
	border-radius:3px 3px 3px 3px;
        -moz-border-radius: 3px; /* Firefox */
        -webkit-border-radius: 3px; /* Safari, Chrome */
}

img.btn_close { Position the close button
	float: right; 
	margin: -28px -28px 0 0;
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
	color:#999; 
	font-size:11px; 
	line-height:18px;
} 

form.signin .textbox input { 
	background:#666666; 
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

.entry{
	height:900px;}

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

</style>

<style>
body{
font-family:Arial, Helvetica, sans-serif
}
 
h1, h2{
font-family:'Georgia', Times New Roman, Times, serif;
}
 
h2{
color:#2A3F55; /*Color default: #999 */
font-size:20px;
font-weight:bold;
}
 
ul{
padding:0px;
margin:0px;
list-style:none;
}
 
li{
padding:5px;
display:none;
}
 
label{
font-size:14px;
font-weight:bold;
}
 
input[type="text"], input[type="password"], textarea{
-moz-border-radius: 6px 6px 6px 6px;
-moz-box-shadow: 3px 5px 10px #78D8F2;
border: 1px solid #05BBED;
font-size: 15px;
margin: 8px;
padding: 6px;
width: 220px;
}
 
input[type="submit"], input[type="reset"]{
background-color: #078EA0;
border: 1px solid #0094A7;
color: #FFFFFF;
font-size: 14px;
padding: 4px;
-moz-border-radius:6px;
-webkit-border-radius:6px;
}
 
.error{
font-size:11px;
color:#cc0000;
padding:4px;
}
 
#form{
width:415px;
margin:0 auto;
margin-top:30px;
}
 
#form-elements {
border: 1px solid #aeaeae;
background-color: #F2F2F2;
padding: 14px;
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
                    <a title="Home" href="index.php">Contácto</a>&nbsp;/&nbsp;
                    Contáctanos Rapidamente
                </div>
			<!-- ENDS Breadcrumb-->
         
    
  
  
  
  
  <!-- end .header --></div>

  
  <div class="content" id="content" >
  <br />
  
  <p style="margin-left:60px;font-size:16pt"><b> FLORENSE Enfermeras a Domicilio </b></p><br /><br /><br />
  
  <img src="Imagenes/contacto.png" style="float:left; margin-left:20px;" /><br />
  

<center><div style=" margin-top:5px;" >
 
    <div style="width:600px;">
    	<form id="form" name="form1" method="post" action="" style="margin-top:-40px;"  onSubmit="MM_validateForm('Nombre','','R','Telefono','','R','CorreoElectronico','','R','Direccion','','R','tmptxt','','R','Comentarios','','R');return document.MM_returnValue">
        <div class="wrapper">
                        <div class="form">
                            <label style="margin-left:-175px;">*Nombre:</label><br>
                            <input type="text" name="Nombre" id="Nombre" size="35" required="required" onKeyPress="return handleEnter(this, event)" />
                        </div>
                        <div class="form" style="width:600px;">
                            <label style="margin-left:-165px;">*Teléfono:</label><br>
                            <input style="margin-left:5px;" type="text" name="Telefono" id="Telefono" size="35" required="required" onKeyPress="return handleEnter(this, event)" />
                        </div>
          </div>
          <div class="wrapper">
                        <div class="form" style="width:600px;"> 
                        	<label style="margin-left:75px;">*Correo Electrónico:</label><br>
                            <input style="margin-left:165px;" type="text" name="CorreoElectronico" id="CorreoElectronico" size="35" required="required" onKeyPress="return handleEnter(this, event)" />
                        </div>
                        <div class="form" style="width:600px;">
                            <label style="margin-left:-165px;">Dirección:</label><br>
                            <input type="text" name="Direccion" id="Direccion" size="35" required="required" onKeyPress="return handleEnter(this, event)" />
                        </div>
           </div>
                        <div class="form3" style="width:600px;">
                            <label style="margin-left:-305px;">*Comentarios:</label><br>
                            <textarea style="margin-left:-155px; width:240px; height:95px;" name="Comentarios " cols="30" rows="5" id="Comentarios" required="required" onKeyPress="return handleEnter(this, event)"></textarea>                   
                        </div><br>
                      
                        <div style="margin-left:-40px; ">
                            <img src="jpgraph-captcha/captcha.php" width="90" height="30" />
                        </div>
                        <div style="margin-left:-195px; margin-top:-60px;">
                            <a href="jpgraph-captcha/captcha.php"><img src="Imagenes/Refresh-icon.png" width="60" height="60"></a>
                        </div>
                        <div style="margin-left:160px; margin-top:-90px; ">
                            <input name="tmptxt" type="text" id="tmptxt" maxlength="6" onKeyPress="return handleEnter(this, event)" style="		                        width:80px; height:20px; margin-top:20px;" />               
                        </div><br>
                        <div style="margin-left:15px; ">
                            <input id="Enviar" type="submit" value="Enviar" name="Enviar" style="height:30px; width:100px;" />			                            &nbsp;&nbsp;
                            <input id="Borrar" type="reset" value="Borrar" name="Borrar" style="height:30px; width:100px;" />
                            <input name="action" type="hidden" value="checkdata">
                        </div>
      
      
 
			</form>
             
        <!-- end .content -->
        
        


</div><br />
</div></center>
</div>
   
   
  
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
<!-- end .container --></div>

<center><p id="copyr">Copyright © 2011 Register. All right reserved</p></center>

</body>
</html>