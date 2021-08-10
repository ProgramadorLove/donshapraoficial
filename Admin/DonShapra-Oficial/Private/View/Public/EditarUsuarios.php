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
    $usuario=$_SESSION['editar']['usuario'];
    $clave=$_SESSION['editar']['clave'];
    $cargo=$_SESSION['editar']['cargo'];
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
                                    <li><a href="#">Usuario</a></li>
                                    <li><a href="ReporteUsuarios.php">Reporte de usuario</a></li>
                                    <li class="active">Actualizar usuarios</li>
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
                                <strong>ACTUALIZAR  USUARIOS</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/Usuarios/ControllerEditarUsuario.php" method="POST" >
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
                                    <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" required value="<?php   echo $nombre; ?>">

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label class=" form-control-label">Apellido</label>
                                                <input type="text" class="form-control"  name="apellido" required value="<?php   echo $apellido; ?>">

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Dni</label>
                                                <input type="text" class="form-control"  name="dni"  required value="<?php   echo $dni; ?>">
        
                                            </div>
                                    </div><br>
                                    <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Sexo</label>
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
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label class=" form-control-label">Celular</label>
                                                <input type="text" class="form-control"  name="celular" required value="<?php   echo $celular; ?>">

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Cargo</label>
                                                <select name="cargo" class="form-control" tabindex="1">
                                                    <?php if($cargo=="Administrador"){ ?>
                                                        <option value="Administrador" selected>Administrador</option>
                                                        <option value="Cajero" >Cajero</option>
                                                    <?php } else{?>
                                                        <option value="Administrador" >Administrador</option>
                                                        <option value="Cajero" selected>Cajero</option>
                                                    <?php } ?>
                                                </select>
                                                </select>
                                            </div>
                                    </div><br>
                                    <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="validationCustom03">Usuario</label>
                                                <input class="form-control" name="usuario" required value="<?php   echo $usuario; ?>">

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="validationCustom04">Contraseña</label>
                                                <input class="form-control" name="clave" required value="<?php   echo $clave; ?>">

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