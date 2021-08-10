<?php
require_once ("../../Model/ModelCliente.php");

$enlace=new ModeloCliente();

$resultado=$enlace->mostrarCliente();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']." ".$fila['apellido']."</td>";
    echo "<td>".$fila['dni']."</td>";
    echo "<td>".$fila['sexo']."</td>";
    echo "<td>".$fila['celular']."</td>";
    echo "<td>".$fila['correo']."</td>";
    echo "<td> <a href='#' onclick='pasarClientes(".$fila['id'].",\" ".$fila['nombre']."\",".$fila['dni'].")'  data-dismiss='modal'><b>Agregar</b></a></td>";
    echo "</tr>";
}

?>
