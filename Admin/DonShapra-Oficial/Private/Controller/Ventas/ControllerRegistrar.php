<?php
require_once ("../../Model/ModelVentas.php");


$id_cliente = $_POST['cli'];
$fecha_venta = $_POST['fec'];
$num_venta = $_POST['num'];
$tipo_documento = $_POST['tip'];
$subtotal = $_POST['sub'];
$igv = $_POST['ig'];
$total = $_POST['tot'];

$objv = new ModelVentas();

if($objv ->insertarVenta($id_cliente,$fecha_venta,$num_venta,$tipo_documento,$subtotal,$igv,$total)){
	if ($resp = $objv -> mostrarId()) {
		$registro = $resp -> fetch_array(MYSQLI_ASSOC);
        $id_venta = $registro["id"];
    // si registro
		// 2 registramos el contenido de la venta
		session_start();
		for($i=0;$i<count($_SESSION['codigo']);$i++){ 
			if($_SESSION['codigo'][$i]!= "x"){
				$id_producto = $_SESSION['codigo'][$i];
				$cantidad = $_SESSION['cantidad'][$i];
				$precio_unitario = $_SESSION['precio'][$i];
				$monto = $_SESSION['monto'][$i];
				if($objv ->insertarDetalle($id_venta,$id_producto,$cantidad,$precio_unitario,$monto)){
					echo "Exito";
                   /*  session_destroy();*/
				}else {
					echo "no registro detalle-venta";
				}
			}
		}
	}else {
		echo "no obtuvo el id de la venta";
	}
}else {
	echo "no registro la venta";
}