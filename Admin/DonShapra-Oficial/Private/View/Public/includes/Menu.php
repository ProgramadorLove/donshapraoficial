<!-- Left Panel -->
   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="Inicio.php"><i class="menu-icon fa fa-home"></i>Inicio </a>
                    </li>

                    <li class="menu-item-has-children  dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-card"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="RegistroUsuarios.php">Nuevo usuario</a></li>
                            <li><i class="fa fa-table"></i><a href="ReporteUsuarios.php">Reporte de usuario</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Clientes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="RegistroClientes.php">Nuevo cliente</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="ReporteClientes.php">Reporte de cliente</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children  dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Proveedores</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="RegistroProveedores.php">Nuevo proveedor</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="ReporteProveedores.php">Reporte de proveedor</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Productos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="RegistroProductos.php">Nuevo producto</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="ReporteProductos.php">Reporte de producto</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Banner</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="RegistroBanner.php">Nuevo Banner</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="ReporteBanner.php">Reporte de Banner</a></li>
                        </ul>
                    </li>

                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Catalogo</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="RegistroCatalogo.php">Nuevo Catalogo</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="ReporteCatalogo.php">Reporte de Catalogo</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-btc"></i>Ventas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-bolt"></i><a href="RegistrarVentas.php">Nueva venta</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="MostrarVentas.php">Reporte de venta</a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="Categorias.php"><i class="menu-icon fa fa-line-chart"></i>Categoria </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel --> 
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel" > 
        
        <!-- Header-->

        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="Inicio.php"><img src="../assets/images/logoshapra2.png" alt="Logo"></a>
                    <!--<a class="navbar-brand hidden" href="../Inicio.php"><img src="../assets/images/logo2.png" alt="Logo"></a>-->
                    
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
 <a class="btn btn-warning" href="../../../../../index.php">Ver Pagina</a>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../assets/images/Televisor.jpg" alt="User Avatar">
                            
                        </a>

                        <div class="user-menu dropdown-menu">
                           
                            <a class="nav-link" href="#"><?php echo $nombreUser; ?></a>
                           <hr>
                            

                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-power -off"></i>Cerrar Sesion</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->