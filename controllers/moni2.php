<?php
class Moni2 extends CI_Controller {

	public function index()
	{
		$data["titulo"]="SERVICIOS";
		$data["titulos"]="AGENCIA FLORENSE";
		$data["cuerpo"]="Atenci�n a enfermos con antecedentes de C.A.  En fases intermedia y/o terminal";
 	$data["cuerpo1"]="Atenci�n a pacientes con antecedentes de diabetes y sus complicaciones.";
 	$data["cuerpo2"]="Pacientes con di�lisis peritoneal con manejo de  t�cnica est�ril. De bolsa gemela";
 	$data["cuerpo3"]="Atenci�n a pacientes Hipertensos.";
 	$data["cuerpo4"]="Atenci�n  a pacientes de la tercera edad.";
 	$data["cuerpo5"]="Aplicaci�n de  tratamientos  m�dicos  y  biol�gicos.";
 	$data["cuerpo6"]="Instalaci�n de  sueros  y tratamientos  endovenosos.";  
 	$data["cuerpo7"]="Instalaci�n de cateterismo (Sondas Naso g�stricas, Nazoyeyunales, Sonda Foley)";
 	$data["cuerpo8"]="Curaci�n de Heridas Quir�rgicas, Retiro de puntos,   Suturas.";
 	$data["cuerpo9"]="Realizaci�n ba�o de Esponja,  Inmersi�n  y Regadera";
 	$data["cuerpo0"]="Cuidado a pacientes   de cirug�a  Cara, Cuello, Abdomen  Columna  y Fracturas.";
		$this->load->view('view_servicios',$data);
		
	}
	
	
	
}
?>