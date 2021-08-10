<?php
require_once("../../Model/ModelCliente.php");
$codigo=$_GET['id'];
$enlace=new ModeloCliente(); 
//BUSCO LA PERSONA POE SU CODIGO
$resultado=$enlace->mostrarClienteId($codigo);
//OBTENGO LA FILA DEL RESULTADO
$fila=$resultado->fetch_array(MYSQLI_ASSOC);
session_start();
$_SESSION['editar']=$fila;
header ("Location: ../../View/Public/EditarClientes.php"); 
?> 