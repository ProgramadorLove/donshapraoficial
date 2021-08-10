<?php
require_once("../../Model/ModelCategoria.php");
$codigo=$_GET['id'];
$enlace=new ModeloCategoria();
$resultado=$enlace->eliminarCategoria($codigo);
header ("Location: ../../View/Public/Categorias.php");
?>