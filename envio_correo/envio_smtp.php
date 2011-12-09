<?
  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma
  require "email_registro/class.phpmailer.php";

  //instanciamos un objeto de la clase phpmailer al que llamamos 
  //por ejemplo mail
  $mail = new phpmailer();

  //Definimos las propiedades y llamamos a los métodos 
  //correspondientes del objeto mail

  //Con PluginDir le indicamos a la clase phpmailer donde se 
  //encuentra la clase smtp que como he comentado al principio de 
  //este ejemplo va a estar en el subdirectorio includes
  $mail->PluginDir = "email_registro/";

  //Con la propiedad Mailer le indicamos que vamos a usar un 
  //servidor smtp
  $mail->Mailer = "smtp";

  //Asignamos a Host el nombre de nuestro servidor smtp
  $mail->Host = "smtp.bizmail.yahoo.com";

  //Le indicamos que el servidor smtp requiere autenticación
  $mail->SMTPAuth = true;

  //Le decimos cual es nuestro nombre de usuario y password
  $mail->Username = "rtorres@warson.com"; 
  $mail->Password = "charolas";

  //Indicamos cual es nuestra dirección de correo y el nombre que 
  //queremos que vea el usuario que lee nuestro correo
  $mail->From = "rtorres@warson.com";
  $mail->FromName = "Rubencin Torres";

  //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
  //una cuenta gratuita, por tanto lo pongo a 30  
  $mail->Timeout=30;

  //Indicamos cual es la dirección de destino del correo
  $mail->AddAddress("back_sco_33@hotmail.com");
//  $mail->AddAddress("regulador2000@gmail.com");
//  $mail->AddBCC('rtorres@warson.com','Isc. Torres');

  //Asignamos asunto y cuerpo del mensaje
  //El cuerpo del mensaje lo ponemos en formato html, haciendo 
  //que se vea en negrita
  $mail->Subject = "Prueba de phpmailer";
  $mail->Body = "<b>Mensaje de prueba mandado con phpmailer en formato html</b>";

  //Definimos AltBody por si el destinatario del correo no admite email con formato html 
  $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";

  //se envia el mensaje, si no ha habido problemas 
  //la variable $exito tendra el valor true
  $exito = $mail->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep	
 /* $intentos=1; 
  while ((!$exito) && ($intentos < 5)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
*/		
   if(!$exito)
   {
	echo "Problemas enviando correo electrónico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo "Mensaje enviado correctamente";
   } 
?>
