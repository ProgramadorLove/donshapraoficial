<?php
 session_start();
 unset($_SESSION["codigo"]); 
 unset($_SESSION["producto"]);
 unset($_SESSION["precio"]);
 unset($_SESSION["cantidad"]);
 unset($_SESSION["monto"]);
 session_destroy('codigo');
 session_destroy('producto');
 session_destroy('precio');
 session_destroy('cantidad');
 session_destroy('monto');
echo "liberado";