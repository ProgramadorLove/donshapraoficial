<?php
require_once ("../../Model/ModelProveedor.php");

$empresa_nombre=$_POST['empresa_nombre'];
$dni_ruc=$_POST['dni_ruc'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];





$enlace=new ModeloProveedor();

$estado=$enlace->insertarProveedor($empresa_nombre,$dni_ruc,$telefono,$celular,$direccion);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/RegistroProveedores.php?msj=1";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/RegistroProveedores.php?msj=0";
}

header($ruta);
?>