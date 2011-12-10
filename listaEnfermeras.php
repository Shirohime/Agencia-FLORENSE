<?php
	
	session_start();

   //require('conexion.php');
   require('fpdf17/fpdf.php');
   
   
   //$con = conexion();
   //$pdf -> conexion();
  
   
   $con = mysql_connect('localhost','root','') or die ("No se ha podido conectar");
   
   mysql_select_db("agenciaenfermeria",$con) or die("Error al tratar de selecccionar la base de datos");
   
   
   define('FPDF_FONTPATH','font/');
   
   class PDF extends FPDF
   {
	   function Header()
	   {
	   		$this->Image('Imagenes/logo.jpg',10,8,30);

      		$this->SetFont('Arial','B',20);

      		$this->Cell(200,30,'Florense. Listado de enfermeras.',0,0,'C');
	   }
	   function Footer()
	   {
		    $this->SetY(-10);

			$this->SetFont('Arial','I',8);

			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	   }
	   
	   function contenido()
	   {
		   global $con;
		   
		   $this->SetTextColor(0); //se pone el color de fuente a negra
		   $this -> Ln();
		   
		   $this->Cell(30,5,'Clave de la enfermera',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,'Nombre',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,'Apellido Paterno',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,'Apellido Materno',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,'RFC',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(35,5,'Domicilio',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(20,5,'Telefono',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(10,5,'Edad',1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Ln();
		   
		   $qry = "SELECT * FROM enfermeras";
		   $con = mysql_query($qry,$con);
		   while($dat = mysql_fetch_array($con)){
			   $this->Cell(30,5,$dat['IDEnfermera'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,$dat['Nombre'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,$dat['ApellidoPaterno'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,$dat['ApellidoMaterno'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(25,5,$dat['RFC'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(35,5,$dat['Domicilio'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(20,5,$dat['Telefono'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   $this->Cell(10,5,$dat['Edad'],1,0,'C',0); // cell - celda[ancho, alto, contenido,no border,alinear al centro,relleno del cuadro]
			   
			   $this->Ln();// linea vacia
		   }
	   }
   }
   
   $pdf =  new PDF('P','mm','Letter');
   $pdf -> AliasNbPages();
   $pdf -> AddPage();
   $pdf -> SetFont('Arial','',8);
	
   $pdf -> SetY(10);
   $pdf -> SetX(10);
   
   $pdf -> contenido();
   $pdf->Output();
?>