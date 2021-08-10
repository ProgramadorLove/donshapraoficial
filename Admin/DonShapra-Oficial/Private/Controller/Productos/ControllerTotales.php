<?php
session_start();
$total=0;
for($i=0;$i<count($_SESSION['monto']);$i++){
$total=$total+$_SESSION['monto'][$i];
}
echo $total;
?>