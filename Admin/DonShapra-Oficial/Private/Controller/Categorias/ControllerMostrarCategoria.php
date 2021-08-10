<?php
require_once ("../../Model/ModelCategoria.php");

$enlace=new ModeloCategoria();

$resultado=$enlace->mostrarCategoria();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['categoria']."</td>";


    echo "<td> <a href='#' class='text-danger' data-toggle='modal' data-target='#Modaleliminar' onclick=IdCategoria(".$fila['id'].")><i class='fa fa-trash'></i></a> </td>";
    echo "</tr>";
}

?>