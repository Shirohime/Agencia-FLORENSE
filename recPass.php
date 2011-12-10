<?php

require("envio_correo/PHPMailer_5.2.0/class.phpmailer.php");
//====================Genera Pass
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<10;$i++) {
$cad .= substr($str,rand(0,62),1);
}
//print $cad;
//================================


echo $email=$_POST['correo'];

require('conexion.php');
$query = "UPDATE usuario SET pass = '".$cad."' WHERE email_cliente = '".$email."'";
$response = mysql_query($query, $con);	
//Cerrar conexion
mysql_close($con);
echo "Se actualizo";
	$mail =  new PHPMailer();
	$mail -> IsSMTP(); 										// Verificamos si el envio es via protocolo SMTP
	$mail -> Host = "mail.wetpets.com.mx";					// Especificamos el servidor de envio
	$mail -> SMTPAuth = true; 								// Definimos el envio SMPT
	$mail -> Username = "isctorres@wetpets.com.mx"; 	// Nombre de usuario SMTP
	$mail -> Password = "p31n3t1n"; 					// Password SMTP
	$mail -> From = "AgenciaEnfermerasSoporte@gmail.com";			// Cuenta de correo que envia el correo	
	$mail -> FromName = "AgenciaEnfermeras Soporte";				// "Alias" para indentificar el correo
	$mail -> AddAddress($email); 			
	
	$mail -> WordWrap = 50; 								// set word wrap to 50 characters		
	$mail -> Subject = "Recuperacion de contraseña";						
	$mail -> Body = 
					"Contraseña      : ".$cad."\n".
					"AgenciaEnfermerasSoporte";				
	
	if(!$mail -> Send()){
		echo 'Error Info '.$mail->ErrorInfo;		
	}
	header('Location: forPass.php'); 
	echo "Se envio correctamente";	 

?>