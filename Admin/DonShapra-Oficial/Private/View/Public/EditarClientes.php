<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 

    //obtener los datos del registro
    //session_start();
    $codigo=$_SESSION['editar']['id'];
    $nombre=$_SESSION['editar']['nombre']; 
    $apellido=$_SESSION['editar']['apellido'];
    $dni=$_SESSION['editar']['dni'];
    $sexo=$_SESSION['editar']['sexo'];
    $celular=$_SESSION['editar']['celular'];
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
                                    <li><a href="#">Cliente</a></li>
                                    <li><a href="ReporteClientes.php">Reporte de cliente</a></li>
                                    <li class="active">Actualizar clientes</li>
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
                                <strong>ACTUALIZAR  CLIENTES</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/Clientes/ControllerEditarCliente.php" method="POST" >
                            <input type="hidden" name="id" value="<?php   echo $codigo; ?>">
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
                                        
                                        <input class="form-control" name="nombre" value="<?php   echo $nombre; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Apellido</label>
                                    <div class="input-group">
                                        
                                        <input class="form-control" name="apellido" value="<?php   echo $apellido; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-2">
                                                <label for="validationCustom03">Dni</label>
                                                <input class="form-control" name="dni" value="<?php   echo $dni; ?>" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-2">
                                                <label for="validationCustom04">Sexo</label>
                                                <select name="sexo" class="form-control" tabindex="1">
                                                    <?php if($sexo=="Masculino"){ ?>
                                                        <option value="Masculino" selected>Masculino</option>
                                                        <option value="Femenino" >Femenino</option>
                                                    <?php } else{?>
                                                        <option value="Masculino" >Masculino</option>
                                                        <option value="Femenino" selected>Femenino</option>
                                                    <?php } ?>
                                                </select>
                                            </div>   
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-2">
                                                <label for="validationCustom03">Celular</label>
                                                <input class="form-control" name="celular" value="<?php   echo $celular; ?>" required>

                                            </div>                          
                                    </div>

                                    <div class="form-group">
                                    <input class="btn btn-warning btn blok" value="Guardar datos" type="submit">
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