<?php

require_once ("Conexion.php");
class ModeloCatalogo extends Conexion {
    private $id;
    private $nombre;
    private $descripcion;
    private $proveedor;
    private $categoria;
    private $stock;
    private $precio;
    private $imagen;
    private $ruta;
    private $destino;

   
    
    
    public function __construct(){
        
    }
    
    public function insertarCatalogo($nombre,$descripcion,$proveedor,$categoria,$stock,$precio,$imagen,$ruta){
        
        $destino="../../View/assets/images/catalogo/".$imagen;
        copy($ruta,$destino);
        
        $sql="INSERT INTO catalogo(nombre,descripcion,proveedor,categoria,stock,precio,imagen)"."VALUES('$nombre','$descripcion','$proveedor','$categoria',$stock,$precio,'$imagen')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
    public function mostrarProductoCategoria() {
        $sql="SELECT *FROM categoria";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function mostrarProductoProveedor() {
        $sql="SELECT *FROM proveedores";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
     public function mostrarCatalogo() {
        $sql="SELECT  *FROM catalogo ";
        
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
   

    public function mostrarCatalogoId($id) {
        $sql="SELECT *FROM catalogo WHERE id=".$id;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }

    public function eliminarCatalogo($codigo){
        $sql="DELETE FROM catalogo WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
    public function editarCatalogo($codigo,$nombre,$descripcion,$proveedor,$categoria,$stock,$precio,$imagen,$ruta){

        $destino="../../View/assets/images/catalogo/".$imagen;
        copy($ruta,$destino);
        
        $sql="UPDATE catalogo SET "
            ."nombre='$nombre',"
            ."descripcion='$descripcion',"
            ."proveedor='$proveedor',"
            ."categoria='$categoria',"
            ."stock=$stock,"
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