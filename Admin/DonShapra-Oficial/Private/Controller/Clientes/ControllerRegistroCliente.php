<?php
require_once ("../../Model/ModelCliente.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$sexo=$_POST['sexo'];
$celular=$_POST['celular'];





$enlace=new ModeloCliente();

$estado=$enlace->insertarCliente($nombre,$apellido,$dni,$sexo,$celular);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/RegistroClientes.php?msj=1";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/RegistroClientes.php?msj=0";
}

header($ruta);
?>