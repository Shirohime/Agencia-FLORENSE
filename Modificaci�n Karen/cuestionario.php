<?php
session_start();
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

<html>
<head>
<TITLE> Florense::Evaluación </title>
<style type="text/css">
 #pregunta{
	    text-align: center;
		font-family: verdana, arial, helvetica; 
        font-size: 15pt;

		}
		#titulos{
		text-align: center;
		font-family: verdana, arial, helvetica; 
		<!--font-weight: bold;-->
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
 </style>
</head>


<body>
<p style="margin-left:60px;font-size:20pt"><b>Evaluación</b></p>
<p id="texto">Para brindarte un mejor servicio, te pedimos que por favor, que realizes la siguiente encuesta. </p>
<form id="form" name="form1" method="post" action="">
 <div style="width:400px; margin-left:10px; margin-top:15px;">
 <table width="212%">
      <tr><td>
        <td width="60%">
<div class="wrapper">
                    <div class="form">
                    <div style="margin-left:80px; ">
                     *Nombre:<br>
                      <input name="Nombre" id="Nombre" size="35" />
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     *Correo Electrónico:<br>
                    <input name="CorreoElectronico" id="CorreoElectronico" size="35" />
                    </div></div><br>
                     <div class="form">
                     <div style="margin-left:80px; ">
                     *Nombre de la Enfermera:<br>
                      <input name="NombreE" id="NombreE" size="35" />
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     ¿Califica el trato recibido por el paciente, como?<br>
                      <input type="radio" name="group0" value="Excelente">Excelente<br>
                      <input type="radio" name="group0" value="Mbueno"> Muy Bueno<br>
                      <input type="radio" name="group0" value="Bueno" checked> Bueno<br>
                      <input type="radio" name="group0" value="Regular" checked> Regular<br>
                      <input type="radio" name="group0" value="Pesimo"> Pesimo<br>
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     ¿Califica el desesmpeño de la enfermera, como?<br>
                      <input type="radio" name="group1" value="Excelente">Excelente<br>
                      <input type="radio" name="group1" value="Mbueno"> Muy Bueno<br>
                      <input type="radio" name="group1" value="Bueno" checked> Bueno<br>
                      <input type="radio" name="group1" value="Regular" checked> Regular<br>
                      <input type="radio" name="group1" value="Pesimo"> Pesimo<br>
                    </div></div><br>
                    <div class="form">
                    <div style="margin-left:80px; ">
                     ¿La puntualidad caracterizo a nuestra enfermera?<br>
                      <input type="radio" name="group2" value="siempre"> Siempre<br>
                      <input type="radio" name="group2" value="csiempre"> Casi Siempre<br>
                      <input type="radio" name="group2" value="nunca" checked> Nunca<br>
                       </div></div><br>
                      <div class="form">
                    <div style="margin-left:80px; ">
                *Comentarios Adicionales:<br>
                    <textarea name="Comentarios " cols="30" rows="5" id="Comentarios"></textarea><br>
            </div><div style="margin-left:80px;">
            <img src="jpgraph-captcha/captcha.php" width="100" height="30">
<input name="tmptxt" type="text" id="tmptxt" maxlength="6" />
            </div></div><br>
            
                  <div style="margin-left:120px; ">
                    <input id="Enviar" type="submit" value="Enviar" name="Enviar" style="height:25px;" /><input name="action" type="hidden" value="checkdata">
 </div><br>
 </div>
 </td>
 <td><img src="nurse.jpg" border="0" hspace="0"> </td>
      </tr>
    </table>
    </div>
    </form>
 
  <center>
        <div id="footer-in">
			<p>Copyright © 2011 Register. All right reserved</p>
		</div>
        </center>
</body>
 </html>