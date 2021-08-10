<?php

require_once("../../Model/ModelBanner.php");



//recibe los valores que  vienen de la interfaz
$codigo=$_POST['id'];
$nombre=$_POST['nombre']; 
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];

//crear instancia
$enlace=new ModeloBanner(); 


$respuesta=$enlace->editarBanner($codigo,$nombre,$descripcion,$precio,$imagen,$ruta);

if($respuesta)
{
    $ruta="Location:../../View/Public/ReporteCatalogo.php";
}
else
{
    $ruta="Location:../../View/Public/EditarCatalogo.php?msj=0"; 
}


session_start();

$codigo=$_SESSION['editar']['id'];
$nombre=$_SESSION['editar']['nombre']; 
$descripcion=$_SESSION['editar']['descripcion'];
$precio=$_SESSION['editar']['precio'];
$imagen=$_SESSION['editar']['imagen'];

header($ruta);
?>