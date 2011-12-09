<?php
session_start();
if ($_POST['action'] == "checkdata") {
    if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {
        echo "Bienvenido ".$_POST['nombres'];
    } else {
        echo "Error: Inténtalo nuevamente";
    }
	echo $tmptxt;
    exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Captcha con JPGraph</title>
<style type="text/css">
<!--
body {
	font-family: "Trebuchet MS", Tahoma, Verdana;
	font-size: 12px;
	font-weight: normal;
	color: #999999;
	text-decoration: none;
}
-->
</style>
</head>
<body>
<h3>Formulario</h3>
<form id="form" name="form1" method="post" action="">
Nombres<br />
<input name="nombres" type="text" id="nombres" value="<?php echo $hola?>" /><br/>
Verificaci&oacute;n:<br/>
<img src="captcha.php" width="100" height="30"><br />
<input name="tmptxt" type="text" id="tmptxt" /><br />
<input type="submit" name="Submit" value="Enviar" />
<input name="action" type="hidden" value="checkdata">
</form>
</p>
<p>&nbsp; </p>
</body>
</html>