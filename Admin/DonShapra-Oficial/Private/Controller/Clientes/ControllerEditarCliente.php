<?php

require_once("../../Model/ModelCliente.php");



//recibe los valores que  vienen de la interfaz
$codigo=$_POST['id'];
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$sexo=$_POST['sexo'];
$celular=$_POST['celular'];

//crear instancia
$enlace=new ModeloCliente();


$respuesta=$enlace->editarCliente($codigo,$nombre,$apellido,$dni,$sexo,$celular);

if($respuesta)
{
    $ruta="Location:../../View/Public/ReporteClientes.php";
}
else
{
    $ruta="Location:../../View/Public/EditarClientess.php?msj=0"; 
}


session_start();

$codigo=$_SESSION['editar']['id'];
$nombre=$_SESSION['editar']['nombre']; 
$apellido=$_SESSION['editar']['apellido'];
$dni=$_SESSION['editar']['dni'];
$sexo=$_SESSION['editar']['sexo'];
$celular=$_SESSION['editar']['celular'];

header($ruta);
?>