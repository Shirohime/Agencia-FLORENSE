<?php
session_start();

require ("conexion.php");
if ($_POST['action'] == "checkdata") {
    if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {
		?>
		<script type="text/javascript" >alert('Enviado');</script>
        <?php
		header ("Location: ../cuestionario.php");
    } else {
		?>
        <script type="text/javascript" >alert('No enviado');</script>
        <?php
    }
    exit;

}
?>