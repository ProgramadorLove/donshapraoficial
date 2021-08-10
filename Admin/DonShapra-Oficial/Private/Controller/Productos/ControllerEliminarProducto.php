<?php
require_once ("../../Model/ModelProducto.php");
$codigo=$_GET['id'];
$enlace=new ModeloProducto();
$resultado=$enlace->eliminarProducto($codigo);
header ("Location: ../../View/Public/ReporteProductos.php");

?>