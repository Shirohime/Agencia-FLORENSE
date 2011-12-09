<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if($_SESSION['login']!=1) {
			//echo "<script>alert('Acceso restringido!');</script>";
			header("Location: index.php");
			exit();
		}
?>