<?php
require_once("../../Model/ModelUsuario.php");
$codigo=$_GET['id'];
$enlace=new ModeloUsuario(); 
//BUSCO LA PERSONA POE SU CODIGO
$resultado=$enlace->mostrarUsuarioId($codigo);
//OBTENGO LA FILA DEL RESULTADO
$fila=$resultado->fetch_array(MYSQLI_ASSOC);
session_start();
$_SESSION['editar']=$fila;
header ("Location: ../../View/Public/EditarUsuarios.php");
?> 