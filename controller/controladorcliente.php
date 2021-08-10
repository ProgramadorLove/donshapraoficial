<?php

require_once ("../model/modelocliente.php");
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$bandera=0;

$enlace=new modelocliente();

$resultado=$enlace->buscardatosCliente();

while ($fila=$resultado->fetch_array(MYSQLI_ASSOC))
        {
    if ($nombre==$fila['nombre'])
    {
        if($dni==$fila['dni'])
        {
            $bandera=1;
            
            session_start();
            $_SESSION['clienteValido']=$fila;
            break;
        }
 else 
     {
     $bandera=2;
     break;
 }
    }
    else{
        $bandera=3;
    }
}
$ruta="";

switch ($bandera)
{
case 1:$ruta="Location: ../View/index2.php";
    break;
case 2:$ruta="Location: ../View/login.php";
    break;
case 3:$ruta="Location: ../View/login.php";
    break;
}
header($ruta);
?>


