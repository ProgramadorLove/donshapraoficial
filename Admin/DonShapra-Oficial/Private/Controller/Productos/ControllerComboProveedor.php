<?php
require_once ("../../Model/ModelProducto.php");

$enlace=new ModeloProducto();

$resultado=$enlace->mostrarProductoProveedor();

if ($resultado->num_rows > 0)
{
   $comboPro="";
   while ($row = $resultado->fetch_array(MYSQLI_ASSOC))
   {
       $comboPro .=" <option value='".$row['empresa_nombre']."'>".$row['empresa_nombre']."</option>";
   }
}
else
{
   echo "No Hubo Resultados";
}

?>