<?php
require_once ("../../Model/ModelProveedor.php");

$enlace=new ModeloProveedor();

$resultado=$enlace->mostrarProveedor();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['empresa_nombre']."</td>";
    echo "<td>".$fila['dni_ruc']."</td>";
    echo "<td>".$fila['telefono']."</td>";
    echo "<td>".$fila['celular']."</td>";
    echo "<td>".$fila['direccion']."</td>";
    echo "<td> <a href='../../Controller/Proveedores/ControllerRutaEditar.php?id=".$fila['id']."' class='text-primary'><i class='fa fa-edit'></i></a>".
    " -  <a href='#' class='text-danger' data-toggle='modal' data-target='#Modaleliminar' onclick=IdProveedor(".$fila['id'].")><i class='fa fa-trash'></i></a> </td>";
    echo "</tr>";
}

?>