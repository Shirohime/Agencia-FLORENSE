<?php
class Moni extends CI_Controller {

	public function index()
	{
		$data["titulo"]="QUIENES SOMOS?";
		$data["titulos"]="AGENCIA FLORENSE";
		$data["cuerpo"]="Se origin� en la ciudad de Morelia Michoacan por lo 
		que se pretende dar a notar la existencia y los servicios que ofrece dicha agencia, 
		as� como tarifas, horarios y el prestigio con el cual ya se cuenta.
            No s�lo en la ciudad de Morelia, si no que se pueden crear nuevas 
		sucursales en cualquier otra ciudad si es que se tiene la demanda esperada. 
        Con �sta agencia lo que se quiere lograr es 
        brindar atenci�n a enfermos con antecedentes
        de Enfermedades Cr�nico-Degenerativas en fase
        intermedio y/o terminal para clientes con situaci�n 
        econ�mica media y media alta. Mercado donde se ha 
        logrado realizar el mayor n�mero de clientes, 
        proporcionando empleo a 15 enfermeras con horarios 
        diversos y un ingreso promedio de 4 5000.00 pesos mensuales. 
        Por lo que se pretende seguir llevando �ste servicio
        a la Sociedad y generar m�s empleos en busca de posicionarse
        en el mercado que actualmente cuenta con poca competencia.";
		$this->load->helper('form');
		$this->load->view('view_moni',$data);
		
	}
	
	
	
}
?>