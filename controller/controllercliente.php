<?php


require_once "../model/modelocliente.php";  

  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $dni=$_POST['dni'];
  $sexo=$_POST['sexo'];
  $celular=$_POST['celular'];
  $correo=$_POST['correo'];
 
  
  $enlace2=new modelocliente();
  
  $estado=$enlace2-> insertarCliente($nombre,$apellido,$dni,$sexo,$celular,$correo);
  
  if($estado)
  {
      //registro correcto
      $ruta="Location: ../View/login.php?msj=1";
  }
 else 
  {
     //error al registrar
      $ruta="location: ../View/registration.php?msj=0";
  }
  header($ruta);