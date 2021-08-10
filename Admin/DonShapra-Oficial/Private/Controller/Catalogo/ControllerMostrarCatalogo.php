<?php
require_once ("../../Model/ModelCatalogo.php");

$enlace=new ModeloCatalogo();

$resultado=$enlace->mostrarCatalogo();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['descripcion']."</td>";
    echo "<td>".$fila['proveedor']."</td>";
    echo "<td>".$fila['categoria']."</td>";
    echo "<td>".$fila['stock']."</td>";
    echo "<td>".$fila['precio']."</td>";
    echo "<td><img width='50' width='50' src='../assets/images/catalogo/".$fila['imagen']."'></td>";
    echo "<td> <a href='../../Controller/Catalogo/ControllerRutaEditarCatalogo.php?id=".$fila['id']."' class='text-primary'><i class='fa fa-edit'></i></a>".
    " -  <a href='#' class='text-danger' data-toggle='modal' data-target='#Modaleliminar' onclick=IdCatalogo(".$fila['id'].")><i class='fa fa-trash'></i></a> </td>";
    echo "</tr>";
}

?>