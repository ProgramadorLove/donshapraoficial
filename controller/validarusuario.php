<?php
require_once ("../model/modeloUsuario.php");
$obj=new Usuario();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$respuesta = $obj->ValidarUsuario($usuario, $clave);
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

