<?php
require("conexion.php");
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
    
    <script language="javascript" src="FuncionScript.js" type="text/javascript">
 	</script>

	<!-- Validaciones de campos -->
    
    <script type="text/javascript">
	/*$(function() 
	{
		//$("ul li:first").show();
		//regular expression for all the fields
		var ck_username = /^[A-Za-z0-9_]{5,20}$/;
		var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
		var ck_password =  /^[A-Za-z0-9!@#$%^&amp;*()_]{6,20}$/;
		var ck_phone = /^[0-9-]{10,20}$/;
		//This function will be called for each key pressed in the username field 
		$('#username').keyup(function()
		{
			var username=$(this).val();
			if (!ck_username.test(username)) 
			{
			 	$(this).next().show().html("Minimum 5 characters");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.password").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//This function will be called for each key pressed in the password field
		$('#password').keyup(function()
		{
			var password=$(this).val();
			if (!ck_password.test(password)) 
			{
			 	$(this).next().show().html("Minimum 6 Characters");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.email").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//This function will be called for each key pressed in the email field
		$('#email').keyup(function()
		{
			var email=$(this).val();
			if (!ck_email.test(email)) 
			{
			 	$(this).next().show().html("Enter valid email");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.phone").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//This function will be called for each key pressed in the phone number field
		$('#phone').keyup(function()
		{
			var phone=$(this).val();
			if (!ck_phone.test(phone)) 
			{
			 	$(this).next().show().html("Minimum 10 numbers");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.submit").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//when we register it will show the status.
		/*$('#submit').click(function()
		{
			var email=$("#email").val();
			var username=$("#username").val();
			var password=$("#password").val();
			if(ck_email.test(email) &amp;&amp; ck_username.test(username) &amp;&amp; ck_password.test(password) )
			{
				$("#form").show().html("<h1>Thank you!</h1><p>You have registered successfully</p>");
			}
			return false;
		});*/
	/*})*/
</script>
    
    <!--Fin de validaciones-->
    
    <script type="text/javascript">
	  function actucap(){
		obj=document.getElementById("cap");
		if (!obj) obj=window.document.all.cap;
		if (obj){
		  obj.src="captcha.php";
		}
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
    
        <!--Efectos jQuery-->
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js.js"></script>
    <script type="text/javascript" src="js/jquery.easing.compatibility.js"></script>
    

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
	height:1590px;
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
	/*height:1600px;*/
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
height: 1300px;
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
 
input[type="text"], input[type="password"], textarea, select{
-moz-border-radius: 6px 6px 6px 6px;
-moz-box-shadow: 3px 5px 10px #78D8F2;
border: 1px solid #05BBED;
font-size: 15px;
margin: 8px;
padding: 6px;
width: 220px;
}

option{
	-moz-border-radius: 6px 6px 6px 6px;
	-moz-box-shadow: 3px 5px 10px #78D8F2;
	border: 1px solid #05BBED;
	font-size: 15px;
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
</style>


<style type="text/css">
 #pregunta{
	    text-align: center;
		font-family: verdana, arial, helvetica; 
        font-size: 15pt;

		}
		#titulos{
		text-align: center;
		font-family: verdana, arial, helvetica; 
		/*font-weight: bold;*/
        font-size: 20pt;
		width: 500px;
		height: 50px;
		overflow: auto;
		background-color: rgba(0,0,250,0.2);
		border-radius: 10px;
		margin: 0 auto 0 auto;-->
	}
	#texto {
		text-align: center;
		font-size: 10pt;
		font-family: verdana, arial, helvetica; 
		
	}
	#fin {
		text-align: center;
		font-size: 15pt;
		font-family: verdana, arial, helvetica; 
		
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
                    Evaluación de las Enfermeras
                </div>
			<!-- ENDS Breadcrumb-->
    
  
  
  
  
  <!-- end .header --></div>

  
  <div class="content" id="content" >
  
  
  <br /><br />
 <p style="margin-left:60px;font-size:20pt"><b>Evaluación</b></p><br />
<p id="texto">Para brindarte un mejor servicio, te pedimos que por favor, que realizes la siguiente encuesta. </p>
<form id="form" name="form1" method="post" action="" style="float:left;" onSubmit="MM_validateForm('Nombre','','R','CorreoElectronico','','R','NombreE','','R','Comentarios','','R');return document.MM_returnValue">
 <div style="width:400px;">
 <table width="212%">
      <tr><td>
        <td width="60%">
<div class="wrapper">
                    <div class="form">
                    <div style="margin-left:80px; ">
                     <label>*Nombre:</label><br /><br />
                      <input name="Nombre" type="text" id="Nombre" size="35" required="required" style="height:25px; width:350px;" onKeyPress="return handleEnter(this, event)" />
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     <label>*Correo Electrónico:</label><br><br />
                    <input name="CorreoElectronico" type="text" id="CorreoElectronico" size="35" required="required" style="height:25px; width:350px;" onKeyPress="return handleEnter(this, event)" />
                    </div></div><br>
                     <div class="form">
                     <div style="margin-left:80px; ">
                     <label>*Nombre de la Enfermera:</label><br>
                     
                     <a href="listaEnfermeras.php">Mostrar Lista de Enfermeras</a>
                     <br />
                       <select name="NombreE" id="NombreE" style="width:100%; height:38px; width:367px;" onkeypress="return handleEnter(this, event)">
                    <option></option>
<?php
	$qry_enf="SELECT * FROM enfermeras";
	$con_enf=mysql_query($qry_enf,$con);
	$i=0;
	while($dat_enf=mysql_fetch_array($con_enf))
	{
?>
<script>
	var enf=new Option("<?php echo $dat_enf['Nombre'].' '.$dat_enf['ApellidoPaterno'].' '.$dat_enf['ApellidoMaterno']?>","<?php echo $dat_enf['IDEnfermera'] ?>");
	document.getElementById('NombreE').options[<?php echo $i?>] = enf;
</script>
<?php
	$i++;
	}
?>
                    </select>
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     <label>¿Califica el trato recibido por el paciente, como?</label><br>
                      <input type="radio" name="group0" value="Excelente">Excelente<br>
                      <input type="radio" name="group0" value="Mbueno"> Muy Bueno<br>
                      <input type="radio" name="group0" value="Bueno" checked> Bueno<br>
                      <input type="radio" name="group0" value="Regular" checked> Regular<br>
                      <input type="radio" name="group0" value="Pesimo"> Pesimo<br>
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     <label>¿Califica el desesmpeño de la enfermera, cómo?</label><br>
                      <input type="radio" name="group1" value="Excelente">Excelente<br>
                      <input type="radio" name="group1" value="Mbueno"> Muy Bueno<br>
                      <input type="radio" name="group1" value="Bueno" checked> Bueno<br>
                      <input type="radio" name="group1" value="Regular" checked> Regular<br>
                      <input type="radio" name="group1" value="Pesimo"> Pesimo<br>
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                    <label>¿La puntualidad caracterizo a nuestra enfermera?</label><br>
                      <input type="radio" name="group2" value="siempre"> Siempre<br>
                      <input type="radio" name="group2" value="csiempre"> Casi Siempre<br>
                      <input type="radio" name="group2" value="nunca" checked> Nunca<br>
                       </div></div><br>
                      <div class="form" style="height:500px;">
                    	<div style="margin-left:80px; ">
                			<label>*Comentarios Adicionales:</label><br>
                    		<textarea name="Comentarios " cols="35" rows="5" id="Comentarios" required="required" style="width:310px;" onKeyPress="return handleEnter(this, event)"></textarea><br>
            			</div><br />
                        
                        
            			<div style="margin-left:130px; ">
                    		<img id="captchaimg" src="jpgraph-captcha/captcha.php" width="90" height="30" />
                            <script languaje="javascript" type="text/javascript">
								function reloadC(){
									obj=document.getElementById("captchaimg");
									if (!obj) obj=window.document.all.cap;
										if (obj){
											obj.src="jpgraph-captcha/captcha.php";
										}
								}
							</script>
				 		</div>
  				 		<div style="margin-left:230px; margin-top:-60px; ">
                			<input name="tmptxt" type="text" id="tmptxt" maxlength="6" onKeyPress="return handleEnter(this, 				                            event)" style="width:80px; height:20px;" required="required" />               
   				  		</div>
                         <iframe name="ifrmaux" id="ifrmaux" style="visibility:collapse; width: 0px; height: 0px">
                        </iframe>
                         <div style="margin-left:70px; margin-top:-60px;">
                        	<img src="Imagenes/Refresh-icon.png" name="recap" width="60" height="60" onClick="javascript: reloadC();" />
                        </div>
                  		<div style="margin-left:120px; "><br /><br />
                    		<input id="Enviar" type="submit" value="Enviar" name="Enviar" style="height:30px; width:100px;" /                            >   <input name="action" type="hidden" value="checkdata">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="Borrar" type="reset" value="Borrar" name="Borrar" style="height:30px; width:100px;" /                            >
						</div><br>
					</div>
 </td>
 <td style="height:900px;"><img src="Imagenes/nurse.jpg" style="margin-top:-350px;" border="0" hspace="0"></td>
      </tr>
    </table>
    </div>
    </form>

  
		 
    <!-- end .content -->
    
    
</div>
   
   
  <br />
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
