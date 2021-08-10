<?php

require_once ("Conexion.php");
class ModeloCategoria extends Conexion {
    private $id; 
    private $categoria;
    
  
   
    
    
    public function __construct(){
        
    }
    
    public function insertarCategoria($categoria){
        
        $sql="INSERT INTO categoria(categoria)"."VALUES('$categoria')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
     public function mostrarCategoria() {
        $sql="SELECT *FROM categoria";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function eliminarCategoria($codigo){
        $sql="DELETE FROM categoria WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
 
}

?>