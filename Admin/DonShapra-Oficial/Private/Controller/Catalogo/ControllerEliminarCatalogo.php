<?php
require_once ("../../Model/ModelCatalogo.php");
$codigo=$_GET['id'];
$enlace=new ModeloCatalogo ();
$resultado=$enlace->eliminarCatalogo($codigo);
header ("Location: ../../View/Public/ReporteCatalogo.php");

?>