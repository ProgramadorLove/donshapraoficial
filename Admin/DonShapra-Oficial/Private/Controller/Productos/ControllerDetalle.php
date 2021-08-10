<?php
//recoger los valores que llego de ajax

 
$codigo=$_POST['id'];
$producto=$_POST['pro'];
$precio=$_POST['pre'];
$cantidad=$_POST['cant'];
$monto = $_POST['mon'];

//guardar los datos temporalmente
session_start();
$_SESSION['codigo'][]=$codigo;
$_SESSION['producto'][]=$producto;
$_SESSION['precio'][]=$precio;
$_SESSION['cantidad'][]=$cantidad;
$_SESSION['monto'][]=$monto;

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

   if($_SESSION['codigo'][$i]!= "x"){
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