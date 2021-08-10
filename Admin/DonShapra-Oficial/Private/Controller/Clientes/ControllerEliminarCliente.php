<?php
require_once("../../Model/ModelCliente.php");
$codigo=$_GET['id'];
$enlace=new ModeloCliente();
$resultado=$enlace->eliminarCliente($codigo);
header ("Location: ../../View/Public/ReporteClientes.php");
?>