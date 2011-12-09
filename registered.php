<?php

session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios Registrados ..</title>
    
    <link rel="stylesheet" type="text/css" href="demo.css" media="screen" />
    
</head>

<body>

<div id="main">
  <div class="container">
    <h1>FLORENSE</h1>
    <h2>Enfermeras a Domicilio</h2>
    </div>
    
    <div class="container">
    
    <?php
	if($_SESSION['id'])
	echo '<h1>Bienvenido, '.$_SESSION['usr'].'! Ya estás registrado</h1>';
	else echo '<h1>Por favor, <a href="index.php">ingresa</a> y vuelve más tarde!</h1>';
    ?>
    </div>


</body>
</html>
