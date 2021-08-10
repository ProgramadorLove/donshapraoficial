<?php
require_once("../../Model/ModelCatalogo.php");
$codigo=$_GET['id'];
$enlace=new ModeloCatalogo();  
//BUSCO LA PERSONA POE SU CODIGO
$resultado=$enlace->mostrarCatalogoId($codigo);
//OBTENGO LA FILA DEL RESULTADO
$fila=$resultado->fetch_array(MYSQLI_ASSOC); 
session_start();
$_SESSION['editar']=$fila;
header ("Location: ../../View/Public/EditarCatalogo.php"); 
?> 