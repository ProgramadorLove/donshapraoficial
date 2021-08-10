<?php
require_once ("../../Model/ModelProducto.php");

$enlace=new ModeloProducto();

$resultado=$enlace->mostrarProductoCategoria();

if ($resultado->num_rows > 0)
{
   $comboCa="";
   while ($row = $resultado->fetch_array(MYSQLI_ASSOC))
   {
       $comboCa .=" <option value='".$row['categoria']."'>".$row['categoria']."</option>";
   }
}
else
{
   echo "No Hubo Resultados";
}

?>