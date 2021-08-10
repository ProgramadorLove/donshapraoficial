<?php

require_once("../../Model/ModelProveedor.php");



//recibe los valores que  vienen de la interfaz
$codigo=$_POST['id'];
$empresa_nombre=$_POST['empresa_nombre']; 
$dni_ruc=$_POST['dni_ruc'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];

//crear instancia
$enlace=new ModeloProveedor();


$respuesta=$enlace->editarProveedor($codigo,$empresa_nombre,$dni_ruc,$telefono,$celular,$direccion);

if($respuesta)
{
    $ruta="Location:../../View/Public/ReporteProveedores.php";
}
else
{
    $ruta="Location:../../View/Public/EditarProveedor.php?msj=0"; 
}


session_start();

$codigo=$_SESSION['editar']['id'];
$empresa_nombre=$_SESSION['editar']['empresa_nombre']; 
$dni_ruc=$_SESSION['editar']['dni_Ruc'];
$telefono=$_SESSION['editar']['telefono'];
$celular=$_SESSION['editar']['celular'];
$direccion=$_SESSION['editar']['direccion'];

header($ruta);
?>