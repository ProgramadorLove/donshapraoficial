<?php
//eliminar las sesiones del sistema
session_start();
session_destroy();
header("Location: ../../Page/index.php");

?>