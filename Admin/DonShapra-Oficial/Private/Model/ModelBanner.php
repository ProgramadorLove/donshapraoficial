<?php

require_once ("Conexion.php");
class ModeloBanner extends Conexion {
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;
    private $ruta;
    private $destino;

   
    
    
    public function __construct(){
        
    }
    
    public function insertarBannner($nombre,$descripcion,$precio,$imagen,$ruta){
        
        $destino="../../View/assets/images/Banner/".$imagen;
        copy($ruta,$destino);
        
        $sql="INSERT INTO banner(nombre,descripcion,precio,imagen)"."VALUES('$nombre','$descripcion','$precio','$imagen')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
  
  
     public function mostrarBanner() {
        $sql="SELECT  *FROM banner ";
        
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
   

    public function mostrarBannerId($id) {
        $sql="SELECT *FROM banner WHERE id=".$id;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }

    public function eliminarBanner($codigo){
        $sql="DELETE FROM banner WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
    public function editarBanner($codigo,$nombre,$descripcion,$precio,$imagen,$ruta){

        $destino="../../View/assets/images/Banner/".$imagen;
        copy($ruta,$destino);
        
        $sql="UPDATE banner SET "
            ."nombre='$nombre',"
            ."descripcion='$descripcion',"
            ."precio=$precio,"
            ."imagen='$imagen'"
            ." WHERE id=".$codigo;
    //conectar a la base de datos
         parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
}

?>