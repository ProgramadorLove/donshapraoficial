<?php

require_once("../../Model/ModelProducto.php");



//recibe los valores que  vienen de la interfaz
$codigo=$_POST['id'];
$producto=$_POST['producto']; 
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$precioV=$_POST['precioV'];
$precioC=$_POST['precioC'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];

//crear instancia
$enlace=new ModeloProducto(); 


$respuesta=$enlace->editarProducto($codigo,$producto,$descripcion,$proveedor,$categoria,$stock,$precioV,$precioC,$imagen,$ruta);

if($respuesta)
{
    $ruta="Location:../../View/Public/ReporteProductos.php";
}
else
{
    $ruta="Location:../../View/Public/EditarProductos.php?msj=0"; 
}


session_start();

$codigo=$_SESSION['editar']['id'];
$producto=$_SESSION['editar']['producto']; 
$descripcion=$_SESSION['editar']['descripcion'];
$proveedor=$_SESSION['editar']['proveedor'];
$categoria=$_SESSION['editar']['categoria'];
$stock=$_SESSION['editar']['stock'];
$precioV=$_SESSION['editar']['precioV'];
$precioC=$_SESSION['editar']['precioC'];
$imagen=$_SESSION['editar']['imagen'];

header($ruta);
?>