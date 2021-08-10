<?php
require_once ("../../Model/ModelCategoria.php");

$categoria=$_POST['categoria'];


$enlace=new ModeloCategoria();

$estado=$enlace->insertarCategoria($categoria);

if($estado){
    //registro correcto
    $ruta="Location: ../../View/Public/Categorias.php";
}
else{
    //registro incorecto
    $ruta="Location: ../../View/Public/Categorias.php";
}

header($ruta);
?>