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
    echo "<td> <a href='#' onclick='pasarProducto(".$fila['id'].",\" ".$fila['producto']."\",".$fila['precioV'].")'  data-dismiss='modal'><b>Agregar</b></a></td>";
    echo "</tr>";
}

?>