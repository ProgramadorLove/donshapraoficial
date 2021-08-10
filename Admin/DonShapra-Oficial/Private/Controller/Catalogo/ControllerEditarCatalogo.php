<?php

require_once("../../Model/ModelCatalogo.php");



//recibe los valores que  vienen de la interfaz
$codigo=$_POST['id'];
$nombre=$_POST['nombre']; 
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$precio=$_POST['precio'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];

//crear instancia
$enlace=new ModeloCatalogo(); 


$respuesta=$enlace->editarCatalogo($codigo,$nombre,$descripcion,$proveedor,$categoria,$stock,$precio,$imagen,$ruta);

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
$proveedor=$_SESSION['editar']['proveedor'];
$categoria=$_SESSION['editar']['categoria'];
$stock=$_SESSION['editar']['stock'];
$precio=$_SESSION['editar']['precio'];
$imagen=$_SESSION['editar']['imagen'];

header($ruta);
?>