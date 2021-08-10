<?php
require_once("../../Model/ModelProducto.php");
$codigo=$_GET['id'];
$enlace=new ModeloProducto();  
//BUSCO LA PERSONA POE SU CODIGO
$resultado=$enlace->mostrarProductoId($codigo);
//OBTENGO LA FILA DEL RESULTADO
$fila=$resultado->fetch_array(MYSQLI_ASSOC); 
session_start();
$_SESSION['editar']=$fila;
header ("Location: ../../View/Public/EditarProductos.php"); 
?> 