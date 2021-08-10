<?php 

require_once("../../Model/ModelUsuario.php");
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$bandera=0; 

//instanciar un objeto del modelo usuario
$enlace=new ModeloUsuario();
//consultar al modelo  usuario  y de base de datos

$resultado=$enlace->mostrarUsuario();
//verifico usuario clave
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
    
{
    if($usuario==$fila['usuario'])
    {
      //existe el usuario  
        if($clave==$fila['clave'])
        {
            //dar acceso al sistema privado
          $bandera=1;
            session_start();//funcion para almacenar una session con un usuario
          $_SESSION['usuarioCorrecto']=$fila;
          break;
        }
        else
        {
            //error al ingresar la clave
            $bandera=2;
            break;
        }
    }
    
    else
    {
        //el usuaro no existe
        $bandera=3;
    }
}
   
//mandar mensaje
$ruta="";
 
switch($bandera) 
    
 {
     case 1:$ruta="Location: ../../View/Public/Inicio.php";
            break;
     case 2:$ruta="Location: ../../../Page/index.php?msj=2";
            break;
     case 3:$ruta="Location: ../../../Page/index.php?msj=3";
            break;
 }

header($ruta);

?>