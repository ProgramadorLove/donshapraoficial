<?php
require('../assets/fpdf/fpdf.php');
require_once ("../../Model/Conexion.php"); 

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../assets/fpdf/logoshapra2.png',20,10,73);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'REPORTE DE CLIENTES ',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFillColor(205,92,92);
    $this->SetDrawColor(205,92,92);
    $this->SetTextColor(255,255,255);
    $this->cell(30, 10, 'Nombre',1,0,'c',1);
    $this->cell(30, 10, 'Apellido',1,0,'c',1);
    $this->cell(30, 10, 'Dni',1,0,'c',1);
    $this->cell(30, 10, 'Sexo',1,0,'c',1);
    $this->cell(30, 10, 'Celular',1,0,'c',1);
    $this->cell(40, 10, 'Correo',1,1,'c',1);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
//$consulta= "SELECT *FROM clientes";
//return $this->conexion->query($sql);
//$resultado= $mysqli->query($consulta);
require_once ("../../Model/ModelCliente.php");
$enlace=new ModeloCliente(); 
$resultado=$enlace->mostrarCliente();








$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNBPages();
$pdf->SetFont('Arial','B',8);

while($row = $resultado->fetch_assoc()){
    $pdf->cell(30, 10, $row['nombre'],1,0,'c',0);
    $pdf->cell(30, 10, $row['apellido'],1,0,'c',0);
    $pdf->cell(30, 10, $row['dni'],1,0,'c',0);
    $pdf->cell(30, 10, $row['sexo'],1,0,'c',0);
    $pdf->cell(30, 10, $row['celular'],1,0,'c',0);
    $pdf->cell(40, 10, $row['correo'],1,1,'c',0);
    

}


$pdf->Output();
?>