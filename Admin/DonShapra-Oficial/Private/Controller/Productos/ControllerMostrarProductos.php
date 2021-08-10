<?php
require_once ("../../Model/ModelProducto.php");

$enlace=new ModeloProducto();

$resultado=$enlace->mostrarProducto();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['producto']."</td>";
    echo "<td>".$fila['descripcion']."</td>";
    echo "<td>".$fila['proveedor']."</td>";
    echo "<td>".$fila['categoria']."</td>";
    echo "<td>".$fila['stock']."</td>";
    echo "<td>".$fila['precioV']."</td>";
    echo "<td>".$fila['precioC']."</td>";
    echo "<td><img width='50' width='50' src='../assets/images/productos/".$fila['imagen']."'></td>";
    echo "<td> <a href='../../Controller/Productos/ControllerRutaEditar.php?id=".$fila['id']."' class='text-primary'><i class='fa fa-edit'></i></a>".
    " -  <a href='#' class='text-danger' data-toggle='modal' data-target='#Modaleliminar' onclick=IdProducto(".$fila['id'].")><i class='fa fa-trash'></i></a> </td>";
    echo "</tr>";
}

?>