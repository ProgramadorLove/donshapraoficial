<?php
require_once("../../Model/ModelBanner.php");
$codigo=$_GET['id'];
$enlace=new ModeloBanner();  
//BUSCO LA PERSONA POE SU CODIGO
$resultado=$enlace->mostrarBannerId($codigo);
//OBTENGO LA FILA DEL RESULTADO
$fila=$resultado->fetch_array(MYSQLI_ASSOC); 
session_start();
$_SESSION['editar']=$fila;
header ("Location: ../../View/Public/EditarBanner.php"); 
?> 