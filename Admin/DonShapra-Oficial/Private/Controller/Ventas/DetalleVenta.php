<?php
	require_once("../../Model/ModelVentas.php");
	$obj = new ModelVentas();

	if (isset($_POST['val'])) {
		$id = $_POST['val'];
		$resultado = $obj ->mostrarDetalle($id);
		$i = 0;
		while($fila = $resultado -> fetch_array(MYSQLI_ASSOC)){
			$i = $i + 1;
		
				echo "<tr>
								<th scope='row'>".$i."</th>
								<td>".$fila["producto"]."</td>
								<td> S/. ".$fila["precio_unitario"]."</td>
								<td>".$fila["cantidad"]."</td>
								<td> S/. ".$fila["monto"]."</td>
								
							</tr>";
				
        }
	}
			
?>