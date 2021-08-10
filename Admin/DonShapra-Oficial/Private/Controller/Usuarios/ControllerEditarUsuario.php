<?php

require_once("../../Model/ModelUsuario.php");



//recibe los valores que  vienen de la interfaz
$codigo=$_POST['id'];
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$sexo=$_POST['sexo'];
$celular=$_POST['celular'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$cargo=$_POST['cargo'];
//crear instancia
$enlace=new ModeloUsuario();


$respuesta=$enlace->editarUsuario($codigo,$nombre,$apellido,$dni,$sexo,$celular,$usuario,$clave,$cargo);

if($respuesta)
{
    $ruta="Location:../../View/Public/ReporteUsuarios.php";
}
else
{
    $ruta="Location:../../View/Public/EditarUsuarios.php?msj=0"; 
}


session_start();

$codigo=$_SESSION['editar']['id'];
$nombre=$_SESSION['editar']['nombre']; 
$apellido=$_SESSION['editar']['apellido'];
$dni=$_SESSION['editar']['dni'];
$sexo=$_SESSION['editar']['sexo'];
$celular=$_SESSION['editar']['celular'];
$usuario=$_SESSION['editar']['usuario'];
$clave=$_SESSION['editar']['clave'];
$cargo=$_SESSION['editar']['cargo'];

header($ruta);
?>