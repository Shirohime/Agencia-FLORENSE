<?php

$con = mysql_connect('localhost','root','') or die ("No se ha podido conectar");

#Seleccion de la base de datos a utilizar
mysql_select_db("agenciaenfermeria",$con) or die("Error al tratar de selecccionar la base de datos");

mysql_query("SET names UTF8");

?>

