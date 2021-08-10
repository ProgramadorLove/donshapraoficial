<?php
require_once ("../../Model/ModelProveedor.php");
$codigo=$_GET['id'];
$enlace=new ModeloProveedor();
$resultado=$enlace->eliminarProveedor($codigo);
header ("Location: ../../View/Public/ReporteProveedores.php");

?>