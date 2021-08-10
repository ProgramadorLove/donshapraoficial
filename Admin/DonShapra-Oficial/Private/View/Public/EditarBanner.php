<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
    // require_once ("../../Controller/Productos/ControllerComboCategoria.php"); 
    // require_once ("../../Controller/Productos/ControllerComboProveedor.php"); 


     $codigo=$_SESSION['editar']['id'];
     $nombre=$_SESSION['editar']['nombre']; 
     $descripcion=$_SESSION['editar']['descripcion'];
     $precio=$_SESSION['editar']['precio'];
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
                                <strong>ACTUALIZAR BANNER</strong> <br>
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/banner/ControllerEditarBanner.php" method="POST" enctype="multipart/form-data" >
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
                                                <label for="validationCustom01">Nombre</label>
                                                <input type="text" class="form-control"  name="nombre" required value="<?php   echo $nombre; ?>"><br>
                                            </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Descripcion</label>
                                                <input type="text" class="form-control"  name="descripcion" required value="<?php   echo $descripcion; ?>">
                                               <br>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="form-row">
                                            
                                           
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Precio de venta</label>
                                                <input type="text" class="form-control"  name="precio"  required value="<?php   echo $precio; ?>">
        
                                            </div>

                                            <div class="form-group row">
                                    <label class="col-md-3">Foto</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" accept="image/*" name="imagen" REQUIRED>
                                            <label class="custom-file-label" for="validatedCustomFile">Foto del producto..</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
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