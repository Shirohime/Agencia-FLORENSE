<?php
class Moni3 extends CI_Controller {

	public function index()
	{
		$data["titulo"]="Evaluacion";
		$data["titulos"]="AGENCIA FLORENSE";
		$data["cuerpo"]="Para brindarte un mejor servicio, te pedimos que por favor llenes el siguiente cuestionario
		donde evaluaremos la manera de trabajar de nuestras enfermeras ";
		
		$data["fin"]= "Gracias por tu tiempo!!!";
		$this->load->view('view_cuestionario',$data);
	
	}
	
	
	
}
?>