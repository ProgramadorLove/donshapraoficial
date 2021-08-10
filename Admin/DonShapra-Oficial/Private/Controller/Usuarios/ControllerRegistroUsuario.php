<?php
require_once ("../../Model/ModelUsuario.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$sexo=$_POST['sexo'];
$celular=$_POST['celular'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$cargo=$_POST['cargo'];




$enlace=new ModeloUsuario();

$estado=$enlace->insertarUsuario($nombre,$apellido,$dni,$sexo,$celular,$usuario,$clave,$cargo);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/RegistroUsuarios.php?msj=1";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/RegistroUsuarios.php?msj=0";
}

header($ruta);
?>