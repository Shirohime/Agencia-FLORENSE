<?php
	session_start();
	
	require('conexion.php');

	$username=$_POST['usuario'];
	$nomb=$_POST['nombre'];
	$email=$_POST['correo'];
	$password=$_POST['pass'];
	
	
	
	function checkEmail($email)
    {
		return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $email);
    }

	
	/*$consulta_user=mysql_query("Select * From usuario Where usuarui LIKE '$username'");
	$row=mysql_fetch_array($consulta_user);
	
	$quien=$row["usuario"];*/
	
	$exist = mysql_fetch_assoc(mysql_query("SELECT usuario FROM usuario WHERE usuario='$username'"));
	
	/*$consulta_email=mysql_query("Select * From usuario Where correo LIKE '$email'");
	
	$row=mysql_fetch_array($consulta_email);
	$correo=$row["correo"];*/
	
	$exist = mysql_fetch_assoc(mysql_query("SELECT correo FROM usuario WHERE correo='$email'"));
	
	if(false){
	$_SESSION['msg']['login-err'] = implode('<br />',$err);
	}
	$err = array();
	if ( is_null( $username ) || is_null( $nomb ) || is_null( $email ) || is_null( $password ))
	{
		array_push($err,'Todos los campos son requeridos');
		
	}
	 
	if(strlen($username)<5 || strlen($username)>12)
	{
		array_push($err,'El usuario debe contener de 5 a 12 caracteres!');
	}
	
	if(preg_match('/[^a-z0-9\-\_\.]+/i',$username))
	{
		array_push($err,'Su nombre de usuario contiene caracteres no v&aacute;lidos!' );
	}
	
	if(!checkEmail($email))
	{
		array_push($err,'Email no v&aacute;lidos!');
	}
	
	//else
	//if($username){
	//		$err = array('Error, el usuario ya existe!');
	//	}else
	//if($email){
	//		$err = array('Este mail ya est&aacute; registrado');
	//	}else
		
	
	if(count($err) < 1){
		
	$guardar = mysql_query("INSERT INTO usuario (usuario,nombre,correo,pass) VALUES ('$username','$nomb','$email',md5('$password'))");
	
	echo 'Usuario Registrado !.. Felicidades !!';
	
	mysql_close();
	//header ("Location: ../index.php");
	$redirect = 'index.php';
	}
	else{
	
		
	//header ("Location: ../blog.php");	
		$redirect = 'registro.php';
	
	//exit();
	
	}
	
?>

<html>
    <head>
        <script type="text/javascript">
            function redireccionar(){
 				 window.location='<?php echo $redirect; ?>';
			} 
			setTimeout("redireccionar()", 5000);
        </script>
    </head>
<body>
<?php
foreach( $err as $er ){
			echo '<p>'.$er.'<p>';
		}
?>
</body>
</html>