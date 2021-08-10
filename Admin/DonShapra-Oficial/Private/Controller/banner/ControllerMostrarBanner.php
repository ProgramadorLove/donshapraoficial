<?php
require_once ("../../Model/ModelBanner.php");

$enlace=new ModeloBanner();

$resultado=$enlace->mostrarBanner();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['descripcion']."</td>";
    echo "<td>".$fila['precio']."</td>";
    echo "<td><img width='50' width='50' src='../assets/images/Banner/".$fila['imagen']."'></td>";
    echo "<td> <a href='../../Controller/banner/ControllerEditarRutaBanner.php?id=".$fila['id']."' class='text-primary'><i class='fa fa-edit'></i></a>".
    " -  <a href='#' class='text-danger' data-toggle='modal' data-target='#Modaleliminar' onclick=IdProducto(".$fila['id'].")><i class='fa fa-trash'></i></a> </td>";
    echo "</tr>";
}

?>