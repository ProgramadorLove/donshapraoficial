<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
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
                  
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>REGISTRO DE CLIENTES</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/banner/ControllerBanner.php" method="POST" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <label class=" form-control-label">Nombre</label>
                                    <div class="input-group">
                                        
                                        <input class="form-control" name="nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Descripcion</label>
                                    <div class="input-group">
                                        
                                        <input class="form-control" name="descripcion">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Precio</label>
                                    <div class="input-group">
                                        
                                        <input class="form-control" name="precio">
                                    </div>
                                </div>
                                <div class="form-row">
                                           
                                             
                                            
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
                                                        
                                    </div>

                                    <div class="form-group">
                                    <input class="btn btn-warning" value="Guardar datos" type="submit">
                                    </div>
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