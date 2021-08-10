<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
     require_once ("../../Controller/Productos/ControllerComboCategoria.php"); 
     require_once ("../../Controller/Productos/ControllerComboProveedor.php"); 


     $codigo=$_SESSION['editar']['id'];
     $producto=$_SESSION['editar']['producto']; 
     $descripcion=$_SESSION['editar']['descripcion'];
     $proveedor=$_SESSION['editar']['proveedor'];
     $categoria=$_SESSION['editar']['categoria'];
     $stock=$_SESSION['editar']['stock'];
     $precioV=$_SESSION['editar']['precioV'];
     $precioC=$_SESSION['editar']['precioC'];
     $imagen=$_SESSION['editar']['imagen'];
?> 
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Inicio</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Productos</a></li>
                                    <li ><a href="ReporteProductos.php">Reporte De productos</a></li>
                                    <li class="active">Actualizar productos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>ACTUALIZAR PRODUCTOS</strong> <br>
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/Productos/ControllerEditarProducto.php" method="POST" enctype="multipart/form-data" >
                            <?php
                                if(isset($_GET{'msj'}))
                                {
                                    $msj=$_GET{'msj'};
                                if($msj==1){
                
                            ?>
                                <div class="alert alert-info"  align="center">
                                    
                                    <strong>Registrado!</strong> Correctamente
                                
                                </div>
                                <?php
                                }
                                else{
                                ?>
                                    <div class="alert alert-danger"  align="center">
                                    <strong>Error!</strong> Intentalo denuevo
                                    
                                </div> 
                                <?php
                                    }
                                    }
                                ?>
                                <input type="hidden" name="id" value="<?php   echo $codigo; ?>">

                                     <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Producto</label>
                                                <input type="text" class="form-control"  name="producto" required value="<?php   echo $producto; ?>"><br>
                                            </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Descripcion</label>
                                                <input type="text" class="form-control"  name="descripcion" required value="<?php   echo $descripcion; ?>">
                                               <br>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="validationCustom03">Proveedor</label>
                                                <select name="proveedor" class="form-control" tabindex="1">
                                                <?php echo $comboPro; ?> 
                                            </select>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="validationCustom04">Categoria</label>
                                                <select name="categoria" class="form-control" tabindex="1">
                                                <?php echo $comboCa; ?> 
                                                </select>

                                            </div>                             
                                    </div> 
                                    <br>
                                    <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Stock</label>
                                                <input type="text" class="form-control"  name="stock" required value="<?php   echo $stock; ?>">

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">Precio de compra</label>
                                                <input type="text" class="form-control"  name="precioC" required value="<?php   echo $precioV; ?>">

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Precio de venta</label>
                                                <input type="text" class="form-control"  name="precioV"  required value="<?php   echo $precioC; ?>">
        
                                            </div>

                                            <!--<div class="form-group row">
                                    <label class="col-md-3">Foto</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" accept="image/*" name="imagen" REQUIRED>
                                            <label class="custom-file-label" for="validatedCustomFile">Foto del producto..</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="photo">
	<label for="foto">Foto</label>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto"></label>
        </div>
        <div class="upimg">
        <input type="file" name="imagen" id="foto">
        </div>
        <div id="form_alert"></div>
</div> 
                                                                         
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-warning" type="submit">Guardar Datos</button>
                                            </div>
                                    </div>
                                    <br>
            
                                 </form>
                             </div>
                        </div>
                    </div>

  </div>


</div><!-- .animated -->
</div><!-- .content -->
<?php
     require_once ("includes/Footer.php"); 
?>