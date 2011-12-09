<?php
 session_start();
require('conexion.php');
// $con = $db;

/*$query2 = mysql_query("SELECT * FROM usuario WHERE usuario='".$username."' and pass='".$password."'"); 

if(mysql_num_rows($query2) > 0){
	session_start();
	$_SESSION["conectado"] = true;
	$_SESSION["usuario"] = $username;
	header("Location: index.php");
}else{
	header("Location: login.php");
}*/
 
 if ($_POST['usuario']) {
	 
	 //Comprobacion del envio del nombre de usuario y password
	 $username=mysql_real_escape_string($_POST['usuario']);
	 $password=mysql_real_escape_string($_POST['pass']);
	 
 		if ($password==NULL) {
 			echo "La contraseña no fue enviada";
 		}else{
			
			 $query = mysql_query("SELECT usuario,pass FROM usuario WHERE usuario = '$username'") or die(mysql_error());
			 $data = mysql_fetch_array($query);
			 
 			 if($data['pass'] != md5($password) || $data['usuario'] != $username) {
 			 	
  				$msg = 'Error!, usuario o contraseña incorrectos!';
				//$redirect = 'login.php';
 			}else{
				$_SESSION['conectado']="logueado";
				$_SESSION['username'] = $username;
				 /*echo "Ha iniciado sesion.. !";*/
				 $redirect = 'index.php';
				 $msg = "Bienvenido  ".$username;
 /*$query = mysql_query("SELECT usuario,pass FROM usuario WHERE usuario = '$username'") or die(mysql_error());
 $row = mysql_fetch_array($query);
 $_SESSION["s_username"] = $row['usuario'];
header ("Location: index.php");// echo "Has sido logueado correctamente ".$_SESSION['s_username']." y puedes acceder al index.php.";*/
 				}
 		}
 }



/*<?php
$user = mysql_real_escape_string($_POST["user"]);
$pass = mysql_real_escape_string($_POST["pass"]);

mysql_connect("localhost","root","");

mysql_select_db("usuarios");

$query = mysql_query("SELECT * FROM login WHERE usuario='".$user."' and password='".$pass."'");

if(mysql_num_rows($query) > 0){
	session_start();
	$_SESSION["conectado"] = true;
	$_SESSION["usuario"] = $user;
	header("Location: index.php");
}else{
	header("Location: login.php");
}
?>*/







?>


<html>
    <head>
    	<style type="text/css">
        	.alert{
					background: #fff6bf url(../exclamation.png) center no-repeat;
					background-position: 15px 50%; /* x-pos y-pos */
					text-align: left;
					padding: 5px 20px 5px 45px;
					border-top: 2px solid #ffd324;
					border-bottom: 2px solid #ffd324;
				}
        </style>
        <script type="text/javascript">
            function redireccionar(){
 				 window.location='<?php echo $redirect; ?>';
			} 
			setTimeout("redireccionar()", 10000);
        </script>
    </head>
<body>
	<p class='alert' style="text-align:center;"><?php echo $msg ?></p>
</body>
</html>


