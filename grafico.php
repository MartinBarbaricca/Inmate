<?php
require('C:/xampp/htdocs/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(100);
    // Título
    $this->Cell(70,10,'REPORTE DE INTERNOS',1,0,'C');
    // Salto de línea
    $this->Ln(20);

       $this->SetX(2);

    $this->Cell(30,10,'Apynombre',1 ,0,'C',0);
    $this->Cell(25,10,'Dni',1 ,0,'C',0);
    $this->Cell(20,10,'Legajo',1,0,'C',0);
    $this->Cell(30,10,'Ubicacion',1 ,0,'C',0);
    $this->Cell(30,10,'Juzgado',1 ,0,'C',0);
    $this->Cell(35,10,'Depto_judicial',1 ,0,'C',0);
    $this->Cell(20,10,'Causa',1 ,0,'C',0);
    $this->Cell(40,10,'Delito',1 ,0,'C',0);
    $this->Cell(23,10,'Pena',1 ,0,'C',0);   
    $this->Cell(35,10,'Vencimiento',1 ,1,'C',0);   

    function footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('pagina ').$this->PageNo().'/{nb}',0,0,'C');
}

}
}
require 'connect_db.php';
$consulta = "SELECT * FROM internos";
$resultado = $mysqli->query($consulta);



$pdf = new PDF('L','mm','A4');
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetX(2);;

 
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(2);
    $pdf-> Cell(30,10,$row ['Apynombre'],1 ,0,'C',0);
    $pdf-> Cell(25,10,$row ['Dni'],1 ,0,'C',0);
    $pdf-> Cell(20,10,$row ['Legajo'],1,0,'C',0);
    $pdf-> cell(30,10,$row ['Ubicacion'],1 ,0,'C',0);
    $pdf-> cell(30,10,$row ['Juzgado'],1 ,0,'C',0);
    $pdf-> cell(35,10,$row ['Depto_judicial'],1 ,0,'C',0);
    $pdf-> cell(20,10,$row ['Causa'],1 ,0,'C',0);
    $pdf-> cell(40,10,$row ['Delito'],1 ,0,'C',0);
    $pdf-> cell(23,10,utf8_decode($row ['Pena']),1 ,0,'C',0);
    $pdf-> cell(35,10,$row ['Vencimiento'],1 ,1,'C',0);
    
    $pdf->SetX(2);

}

$pdf->Output();
?>