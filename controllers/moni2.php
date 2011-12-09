<?php
class Moni2 extends CI_Controller {

	public function index()
	{
		$data["titulo"]="SERVICIOS";
		$data["titulos"]="AGENCIA FLORENSE";
		$data["cuerpo"]="Atención a enfermos con antecedentes de C.A.  En fases intermedia y/o terminal";
 	$data["cuerpo1"]="Atención a pacientes con antecedentes de diabetes y sus complicaciones.";
 	$data["cuerpo2"]="Pacientes con diálisis peritoneal con manejo de  técnica estéril. De bolsa gemela";
 	$data["cuerpo3"]="Atención a pacientes Hipertensos.";
 	$data["cuerpo4"]="Atención  a pacientes de la tercera edad.";
 	$data["cuerpo5"]="Aplicación de  tratamientos  médicos  y  biológicos.";
 	$data["cuerpo6"]="Instalación de  sueros  y tratamientos  endovenosos.";  
 	$data["cuerpo7"]="Instalación de cateterismo (Sondas Naso gástricas, Nazoyeyunales, Sonda Foley)";
 	$data["cuerpo8"]="Curación de Heridas Quirúrgicas, Retiro de puntos,   Suturas.";
 	$data["cuerpo9"]="Realización baño de Esponja,  Inmersión  y Regadera";
 	$data["cuerpo0"]="Cuidado a pacientes   de cirugía  Cara, Cuello, Abdomen  Columna  y Fracturas.";
		$this->load->view('view_servicios',$data);
		
	}
	
	
	
}
?>