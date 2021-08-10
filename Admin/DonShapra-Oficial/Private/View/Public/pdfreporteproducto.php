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
    $this->Cell(80,10,'REPORTE DE PRODUCTOS ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFillColor(205,92,92);
    $this->SetDrawColor(205,92,92);
    $this->SetTextColor(255,255,255);
    $this->cell(50, 10, 'PRODUCTO',1,0,'c',1);
    $this->cell(20, 10, 'STOCK',1,0,'c',1);
    $this->cell(35, 10, 'CATEGORIA',1,0,'c',1);
    $this->cell(26, 10, 'PRECIO',1,0,'c',1);
    $this->cell(55, 10, 'DESCRIPCION',1,1,'c',1);

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
require_once ("../../Model/ModelProducto.php");
$enlace=new ModeloProducto(); 
$resultado=$enlace->mostrarProducto();








$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNBPages();
$pdf->SetFont('Arial','B',8);

while($row = $resultado->fetch_assoc()){
    $pdf->cell(50, 10, $row['producto'],1,0,'c',0);
    $pdf->cell(20, 10, $row['stock'],1,0,'c',0);
    $pdf->cell(35, 10, $row['categoria'],1,0,'c',0);
    $pdf->cell(26, 10, $row['precioV'],1,0,'c',0);
    $pdf->cell(55, 10, $row['descripcion'],1,1,'c',0);
    

}


$pdf->Output();
?>