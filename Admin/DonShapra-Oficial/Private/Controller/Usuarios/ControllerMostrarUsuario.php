<?php
require_once ("../../Model/ModelUsuario.php");

$enlace=new ModeloUsuario();

$resultado=$enlace->mostrarUsuario();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['apellido']."</td>";
    echo "<td>".$fila['dni']."</td>";
    echo "<td>".$fila['sexo']."</td>";
    echo "<td>".$fila['celular']."</td>";
    echo "<td>".$fila['usuario']."</td>";
    echo "<td>".$fila['clave']."</td>";
    echo "<td>".$fila['cargo']."</td>";
    echo "<td> <a href='../../Controller/Usuarios/ControllerRutaEditar.php?id=".$fila['id']."' class='text-primary'><i class='fa fa-edit'></i></a>".
    " -  <a href='#' class='text-danger' data-toggle='modal' data-target='#Modaleliminar' onclick=IdUsuario(".$fila['id'].")><i class='fa fa-trash'></i></a> </td>";
    echo "</tr>";
}

?>