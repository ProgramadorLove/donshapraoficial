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
                                <strong>REGISTRO DE PROVEEDORES</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/Proveedores/ControllerRegistroProveedor.php" method="POST" >
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
                                     <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Empresa</label>
                                                <input type="text" class="form-control"  name="empresa_nombre" required><br>
                                            </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Direccion</label>
                                                <input type="text" class="form-control"  name="direccion" required><br>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Ruc</label>
                                                <input type="text" class="form-control"  name="dni_ruc" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">Celular</label>
                                                <input type="text" class="form-control"  name="celular" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Telefono fijo</label>
                                                <input type="text" class="form-control"  name="telefono"  required>
        
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