<?php
$indice = $_POST['posicion'];

session_start();
$_SESSION['codigo'][$indice] = "x";
$_SESSION['producto'][$indice] = "x";
$_SESSION['precio'][$indice] = 0;
$_SESSION['cantidad'][$indice] = 0;
$_SESSION['monto'][$indice] = 0;
?>
    <table class="table table-hover">
					<thead>
						<tr>
                            <th scope="col">#</th>
                           <th scope="col">Descripcion</th>
                           <th scope="col">P.Unirario</th>
                           <th scope="col">Cant</th>
                           <th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>

<?php
//retornamos la lista actualizada
for($i=0;$i<count($_SESSION['codigo']);$i++){
    
    if($_SESSION['codigo'][$i] !="x"){
			echo        "<tr>";
			echo            "<td scope='col'>".$i."</td>";
			echo            "<td scope='col'>".$_SESSION['producto'][$i]."</td>";
			echo            "<td scope='col'>".$_SESSION['precio'][$i]."</td>";
			echo            "<td scope='col'>".$_SESSION['cantidad'][$i]."</td>";
			echo            "<td scope='col'>".$_SESSION['monto'][$i]."</td>";
            echo            "<td scope='col'> <a href='#' class='text-danger' onclick=\"quitar(".$i.");\" > <i class='fa fa-times'></i></a></td>";
            echo        "</tr>";  
        }
}
?>
</tbody> 
</table>