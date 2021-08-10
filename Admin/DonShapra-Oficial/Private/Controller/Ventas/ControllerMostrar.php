<?php
require_once ("../../Model/ModelVentas.php");

$enlace=new ModelVentas();

$resultado=$enlace->mostrarVentas();

//mostrar datos
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']." ".$fila['apellido']."</td>";
    echo "<td>".$fila['fecha_venta']."</td>";    
    echo "<td>".$fila['num_venta']."</td>"; 
    echo "<td>".$fila['tipo_documento']."</td>"; 
    echo "<td> S/. ".$fila['subtotal']."</td>"; 
    echo "<td> S/. ".$fila['igv']."</td>"; 
    echo "<td> S/. ".$fila['total']."</td>"; 
    echo "<td> <a href='#' class='text-info'  data-toggle='modal' data-target='#detalleModal' onclick=\"ModalDetalle(".$fila['id'].");\"><i class='fa fa-eye'></i></a> </td>";
    echo "</tr>";
}

?>