<?php
require_once ("../../Model/ModelProducto.php");

$producto=$_POST['producto'];
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$precioV=$_POST['precioV'];
$precioC=$_POST['precioC'];
$imagen=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
 




$enlace=new ModeloProducto();

$estado=$enlace->insertarProducto($producto,$descripcion,$proveedor,$categoria,$stock,$precioV,$precioC,$imagen,$ruta);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/RegistroProductos.php?msj=1";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/RegistroProductos.php?msj=0";
}

header($ruta);
?>