<?php
require_once ("../../Model/ModelCatalogo.php");

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$precio=$_POST['precio'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
 




$enlace=new ModeloCatalogo();

$estado=$enlace->insertarCatalogo($nombre,$descripcion,$proveedor,$categoria,$stock,$precio,$imagen,$ruta);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/RegistroCatalogo.php?msj=1";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/RegistroCatalogo.php?msj=0";
}

header($ruta);
?>