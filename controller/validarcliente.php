<?php
require_once ("../model/modelocliente.php");
$obj=new Cliente();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$respuesta = $obj->ValidarCliente($usuario, $clave);
$data = mysqli_fetch_assoc($respuesta);
if (!empty($data)){
    if ($usuario == $data["usuario"] && $clave == $data["clave"]){
        session_start();
        $_SESSION["validacion"] = $data ;
        header("Location: ../View/index.php");
    }
}else{
  //header("Location: ../View/index.php");
}

