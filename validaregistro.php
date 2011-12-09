<?php
	//include("autorizacion.php");
	session_name('cfLogin');
	// Starting the session

	session_set_cookie_params(2*7*24*60*60);
	// Making the cookie live for 2 weeks

	session_start();
	define('INCLUDE_CHECK',true);
	require 'conexion.php';
	require 'functions.php';
	if($_POST!=null){
		//mysql_query("INSERT INTO usuario(usuario,nombre,correo,pass,foto,descripcion)
		//		VALUES('{$usuario}','{$nombre}','{$correo}','{$pass}','{$foto}','{$descripcion}'",$link)
		//		or die("Error al dar de alta el usuario");
		
		mysql_query("	INSERT INTO usuario(usuario,nombre,correo,pass)
						VALUES(
						
							'".$_POST['usuario']."',
							'".$_POST['nombre']."',
							'".$_POST['correo']."',
							'".md5($_POST['password'])."'
						)");
			$row = mysql_fetch_assoc(mysql_query("SELECT id,usuario FROM usuario WHERE usuario='{$_POST['usuario']}' AND pass='".md5($_POST['password'])."'"));
			$_SESSION['usr']=$row['usuario'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['rememberMe'] = 0;
			$_SESSION['login'] = 1;
			
			// Store some data in the session
			
			setcookie('cfLogin',$_POST['rememberMe']);
	}
	header("Location:index.php");
	exit();
?>