<?php
require_once("../../Model/ModelUsuario.php");
$codigo=$_GET['id'];
$enlace=new ModeloUsuario();
$resultado=$enlace->eliminarUsuario($codigo);
header ("Location: ../../View/Public/ReporteUsuarios.php");
?>