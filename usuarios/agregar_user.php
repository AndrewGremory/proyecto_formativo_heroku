<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro usuario</title>
    <link href="../css/styles.css" rel="stylesheet" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Sena</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Opciones </a>
                    <a class="dropdown-item" href="#">Mis fichas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.php">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../inicio.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Fichas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../ficha/agregar_ficha.php">Agregar Ficha</a>
                                <a class="nav-link" href="../ficha/consultar_ficha.php">Consulta de Fichas</a>
                            </nav>
                        </div>
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUsuarios" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="agregar_user.php">Agregar usuario</a>
                                <a class="nav-link" href="consultar_user.php">Consulta de usuario</a>

                            </nav>
                        </div>
                        
                        
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Estadisticas    
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tablas
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>

        <!-- Contenido -->
        
        <div id="layoutSidenav_content">
            <div class="container-fluid">
            <h1 class="mt-4">Ingrese los datos del usuario </h1>
                <div class="card-body">
                    <form id="formulario" role="form" method="post" action="guardado_user.php">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="InsertarNombre" required >Nombres</label>
                                <input class="form-control py-4" name="nombre" type="text" placeholder="Ingrese nombres" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="InsertarApellido">Apellidos</label>
                                <input class="form-control py-4" name="apellido" type="text" placeholder="Ingrese apellidos"required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="InsertarUsuario">Usuario</label>
                        <input class="form-control py-4" name="usuario" type="text" aria-describedby="emailHelp" placeholder="Ingresar nombre de usuario" required/>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="InsertarContraseña">Contraseña</label>
                                <input class="form-control py-4" name="contraseña" type="password" placeholder="Ingresar contraseña" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="InsertarContraseña">Confirmar contraseña</label>
                                <input class="form-control py-4" name="contraseña" type="password" placeholder="Confirmar contraseña"required />
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="small mb-1" for="Rol">Rol </label>
                                <select name="rol" class="form-control" name="Rol" required>
                                    <option selected, disabled>Seleccione un tipo de usuario</option>
                                    <option value="1">administrador</option>
                                    <option value="2">instructor</option>
                                    <option value="3">coordinador</option>
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="small mb-1" for="InsertarUsuario">Correo electronico</label>
                            <input class="form-control py-4" name="correo" type="email" placeholder="Ingresar su correo electronico" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="small mb-1" for="InsertarUsuario">telefono</label>
                            <input class="form-control py-4" name="telefono" type="int" placeholder="Ingresar su correo electronico"required />
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <p id=permisos >Permisos</p>
                            <div class="container">
                                <div class="row row-cols-3">
                                <input type="checkbox" name="permiso1"> Agregar usuario <br>
                                <input type="checkbox" name="permiso2"> Agregar programa <br>
                                <input type="checkbox" name="permiso3"> Agregar ficha <br>
                                <input type="checkbox" name="permiso4"> Agregar programa <br>
                                <input type="checkbox" name="permiso5"> Modificar usuario <br>
                                <input type="checkbox" name="permiso6"> Modificar ficha <br>
                                <input type="checkbox" name="permiso7"> Administrar ficha <br>
                                <input type="checkbox" name="permiso8"> Eliminar usuario <br>
                                <input type="checkbox" name="permiso9"> Eliminar ficha <br>
                                <input type="checkbox" name="permiso10"> Eliminar programa <br>
                                <input type="checkbox" name="permiso11"> Consultar usuario <br> 
                                <input type="checkbox" name="permiso12"> Consultar ficha<br> 
                                <input type="checkbox" name="permiso13"> Consultar rap <br> 
                                <input type="checkbox" name="permiso15"> Agregar contenido rap<br>
                                </div>
                            </div>
                            
                        </div> -->
                        <div class="form-group">
                            <p id=permisos >Permisos</p>
                            <div class="container">
                                <div class="row row-cols-3">
                                    <div class="col"><label><input type="checkbox" name="p1" value="1"> Agregar usuario</label></div>
                                    <div class="col"><label><input type="checkbox" name="p2" value="1"> Agregar programa</label></div>
                                    <div class="col"><label><input type="checkbox" name="p3" value="1"> Agregar ficha</label></div>
                                    <div class="col"><label><input type="checkbox" name="p4" value="1"> Subir Excel</label></div>
                                    <div class="col"><label><input type="checkbox" name="p5" value="1"> Modificar usuario</label></div>
                                    <div class="col"><label><input type="checkbox" name="p6" value="1"> Modificar ficha</label></div>
                                    <div class="col"><label><input type="checkbox" name="p7" value="1">Administrar ficha</label> </div>
                                    <div class="col"><label><input type="checkbox" name="p8" value="1"> Eliminar usuario</label></div>
                                    <div class="col"><label><input type="checkbox" name="p9" value="1"> Eliminar ficha</label></div>
                                    <div class="col"><label><input type="checkbox" name="p10" value="1"> Eliminar programa</label></div>
                                    <div class="col"><label><input type="checkbox" name="p11" value="1"> Consultar usuario</label></div>
                                    <div class="col"><label><input type="checkbox" name="p12" value="1"> Consultar ficha</label></div>
                                    <div class="col"><label><input type="checkbox" name="p13" value="1"> Consultar rap</label></div>

                                </div>
                            </div>
                            
                        </div>
                                        
                        <input type="submit" class="btn btn-primary btn-block" value="Guardar">
                      
                    </form>
                </div>
            </main>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
    
</body>
</html>