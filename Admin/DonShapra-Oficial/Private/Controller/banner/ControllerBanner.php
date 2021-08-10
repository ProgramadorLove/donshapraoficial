<?php
require_once ("../../Model/ModelBanner.php");

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
 




$enlace=new ModeloBanner();

$estado=$enlace->insertarBannner($nombre,$descripcion,$precio,$imagen,$ruta);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/RegistroBanner.php?msj=1";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/RegistroBanner.php?msj=0";
}

header($ruta);
?>