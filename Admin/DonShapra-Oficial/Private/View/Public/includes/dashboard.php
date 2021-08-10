<?php
$mysqli = new mysqli("localhost", "root", "", "ventas2");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $mysqli->query("SELECT *FROM usuarios ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $count_usu = $result->num_rows;

    /* cerrar el resultset */
    $result->close();
}

if ($resultado = $mysqli->query("SELECT *FROM clientes ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $count_cli = $resultado->num_rows;

    /* cerrar el resultset */
    $resultado->close();
}
if ($resultado = $mysqli->query("SELECT *FROM proveedores ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $count_pro = $resultado->num_rows;

    /* cerrar el resultset */
    $resultado->close();
}
if ($resultado = $mysqli->query("SELECT *FROM productos ORDER BY id")) {

    /* determinar el número de filas del resultado */
    $count_produc = $resultado->num_rows;

    /* cerrar el resultset */
    $resultado->close();
}

?>