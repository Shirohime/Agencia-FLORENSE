<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

function checkEmail($email)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $email);
}


function send_mail($from,$to,$subject,$body)
{
	ini_set("SMTP","localhost"); 
	$headers = '';
	$headers .= "From: $from\n";
	$headers .= "Reply-to: $from\n";
	$headers .= "Return-Path: $from\n";
	$headers .= "Message-ID: <" . md5(uniqid(time())) . "@" . $_SERVER['SERVER_NAME'] . ">\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Date: " . date('r', time()) . "\n";

	mail($to,$subject,$body,$headers);
}
function CampoEnBlanco($valor){
	if($valor==null || $valor=='' || $valor==' ')
		return true;
	else return false;
}

function login_usuario($row){
	if($row['usuario'])
			return true;
	else false;
}

function existe_usuario($usuario){
	$exist = mysql_fetch_assoc(mysql_query("SELECT usuario FROM usuario WHERE usuario='{$usuario}'"));
	if($exist['usuario']){
		return true;
	}
	else return false;
}
function existe_email($email){
	$exist = mysql_fetch_assoc(mysql_query("SELECT correo FROM usuario WHERE correo='{$email}'"));
	if($exist['correo']){
		return true;
	}
	else return false;
}
function Inserta_Usuario($usuario,$nombre,$correo,$pass,$foto,$descripcion){
	mysql_fetch_assoc(mysql_query("INSERT INTO usuario(usuario,nombre,correo,pass)
				VALUES('{$usuario}','{$nombre}','{$correo}','{$pass}'"))
				or die("Error al dar de alta el usuario");
}


?>