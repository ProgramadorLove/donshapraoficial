<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 

    //obtener los datos del registro
    //session_start();
    $codigo=$_SESSION['editar']['id'];
    $empresa_nombre=$_SESSION['editar']['empresa_nombre']; 
    $dni_ruc=$_SESSION['editar']['dni_ruc'];
    $telefono=$_SESSION['editar']['telefono'];
    $celular=$_SESSION['editar']['celular'];
    $direccion=$_SESSION['editar']['direccion'];
    //Mostrarlo

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
                                    <li><a href="#">Proveedor</a></li>
                                    <li><a href="ReporteProveedores.php">Reporte De Proveedor</a></li>
                                    <li class="active">Actualizar proveedores</li>
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
                                <strong>REGISTRO DE PROVEEDORES</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/Proveedores/ControllerEditarProveedor.php" method="POST" >
                            <?php
                                if(isset($_GET{'msj'}))
                                {
                                    $msj=$_GET{'msj'};
                                if($msj==1){
                
                            ?>
                                <div class="alert alert-info"  align="center">
                                    
                                    <strong>Actualizado!</strong> Correctamente
                                
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
                                                <label for="validationCustom01">Empresa</label>
                                                <input type="text" class="form-control"  name="empresa_nombre" value="<?php echo $empresa_nombre; ?>" required><br>
                                            </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Direccion</label>
                                                <input type="text" class="form-control"  name="direccion" value="<?php echo $direccion; ?>" required><br>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Ruc</label>
                                                <input type="text" class="form-control"  name="dni_ruc" value="<?php echo $dni_ruc; ?>" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">Celular</label>
                                                <input type="text" class="form-control"  name="celular" value="<?php echo $celular; ?>" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Telefono fijo</label>
                                                <input type="text" class="form-control"  name="telefono" value="<?php echo $telefono; ?>"  required><br>
        
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