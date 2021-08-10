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
                                <strong>REGISTRO DE USUARIOS</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form action="../../Controller/Usuarios/ControllerRegistroUsuario.php" method="POST" >
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
                                                <input type="text" class="form-control" name="nombre" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label class=" form-control-label">Apellido</label>
                                                <input type="text" class="form-control"  name="apellido" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Dni</label>
                                                <input type="text" class="form-control"  name="dni"  required>
        
                                            </div>
                                    </div><br>
                                    <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Sexo</label>
                                                <select name="sexo" class="form-control" tabindex="1">
                                                    <option >Masculino</option>
                                                    <option >Feminino</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label class=" form-control-label">Celular</label>
                                                <input type="text" class="form-control"  name="celular" required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Cargo</label>
                                                <select name="cargo" class="form-control" tabindex="1">
                                                    <option >Administrador</option>
                                                    <option >Cajero</option>
                                                </select>
                                            </div>
                                    </div><br>
                                    <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="validationCustom03">Usuario</label>
                                                <input class="form-control" name="usuario" required>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="validationCustom04">Contraseña</label>
                                                <input class="form-control" name="clave" required>

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