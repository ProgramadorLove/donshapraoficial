<?php
require_once("../../Model/ModelProveedor.php");
$codigo=$_GET['id'];
$enlace=new ModeloProveedor(); 
//BUSCO LA PERSONA POE SU CODIGO
$resultado=$enlace->mostrarProveedorId($codigo);
//OBTENGO LA FILA DEL RESULTADO
$fila=$resultado->fetch_array(MYSQLI_ASSOC);
session_start();
$_SESSION['editar']=$fila;
header ("Location: ../../View/Public/EditarProveedor.php"); 
?> 