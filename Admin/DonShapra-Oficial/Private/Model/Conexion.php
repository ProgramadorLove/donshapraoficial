<?php

define('SERVER','localhost');
define('USUARIO','root');
define('CLAVE','');
define('BASE_DATOS','ventas2');

class Conexion {
    private $server;
    private $usuario;
    private $baseDatos;
    private $clave;
    private $conexion;
       
       public function __construct(){
           
       }
       
       public function conectar_BD(){
           
           $this->server=SERVER;
           $this->usuario=USUARIO;
           $this->clave=CLAVE;
           $this->baseDatos=BASE_DATOS;
           
           $this-> conexion=new mysqli($this->server,$this->usuario,$this->clave, $this->baseDatos); 
       }
       
       //se usara para retornar un valor de  v-f de respuesta
       public function setEjecutarSQL($sql){
           return $this->conexion->query($sql);
       }
       
       //se usara para retornar un bloque de datos de repuestas
       public function getEjecutarSQL($sql){
            return $this->conexion->query($sql);
       }
}

?>