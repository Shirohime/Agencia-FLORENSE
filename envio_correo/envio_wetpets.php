<?php
	require("PHPMailer_5.2.0/class.phpmailer.php");
	
if($_POST['action'] == "send"){
	
	$varname = $_FILES['txtcurriculum']['name'];
	$vartemp = $_FILES['txtcurriculum']['tmp_name'];
	
	$mail =  new PHPMailer();
	$mail -> IsSMTP(); 												// Verificamos si el envio es via protocolo SMTP
	$mail -> Host = "mail.wetpets.com.mx";			 				// Especificamos el servidor de envio
	$mail -> SMTPAuth = true; 										// Definimos el envio SMPT
	$mail -> Username = "isctorres@wetpets.com.mx"; 				// Nombre de usuario SMTP "isctorres@wetpets.com.mx"
	$mail -> Password = "p31n3t1n"; 								// Password SMTP "p31n3t1n"
	$mail -> From = "lupita89_m@hotmail.com";						// Cuenta de correo que envia el correo	
	$mail -> FromName = "ISC Mayra Estrada";				 			// "Alias" para indentificar el correo
	$mail -> AddAddress("ary.dragonfly.963@gmail.com","Gerencia"); 			
 			
	
	$mail -> WordWrap = 50; // set word wrap to 50 characters		
	//$mail -> AddAttachment($documento); // add attachments
	
	if($varname != ""){
		$mail -> AddAttachment($vartemp, $varname); // optional name
	}
	//$mail -> IsHTML(true); // set email format to HTML
	$mail -> Subject = "Curriculum";
	$mail -> Body = "Se ha recibido un curriculum";
	
	header ("Location: ../blog.php");
	echo "alert ('Se ha enviado correctamente!');\n";
							
						$mail -> AltBody = "Reservacion de Habitacion";
						if( !$mail -> Send() )
						{
?>
							<script language="JavaScript">
								alert("Error de envio.<? echo $mail -> ErrorInfo?>");
							</script>
<?php						
						}
						}
?>