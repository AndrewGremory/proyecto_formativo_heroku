<?php
include("conexion.php");
$usuarios = "SELECT * FROM usuarios";
$vpermiso5 = "SELECT permiso5 FROM usuarios WHERE rol = 'instructor'";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Sena</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2" />
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
                        <div class="sb-sidenav-menu-heading">Menu principal</div>
                        <a class="nav-link" href="../inicio.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">Herramientas</div>
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

                        <div class="sb-sidenav-menu-heading">Acceso rapido</div>

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
        <div id="layoutSidenav_content">
            <div class="container">
                <br>
                <div class="table-responsive, d-flex">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Rol</th>
                                <th>Correo electronico</th>
                                <th>Telefono</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Rol</th>
                                <th>Correo electronico</th>
                                <th>Telefono</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $resultado = mysqli_query($con2, $usuarios);

                            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>

                                    <td><?php echo $row["id_usuario"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["apellido"]; ?></td>
                                    <td><?php echo $row["usuario"]; ?></td>
                                    <td><?php echo $row["pw"]; ?></td>
                                    <td><?php echo $row["rol"]; ?></td>
                                    <td><?php echo $row["correo"]; ?></td>
                                    <td><?php echo $row["telefono"]; ?></td>
                                    <td> <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button> </td>
                                    <td> <button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash"></i></button> </td>


                                </tr>
                            <?php } ?>


                        </tbody>
                    </table>
                </div>


                <!-- modal editar -->
                <div id="editar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- formulario -->
                                <form action="editar.php" id="formulario" role="form" method="POST">
                                    <input type="hidden" name="id" id="update_id">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="InsertarNombre">Nombres</label>
                                                <input class="form-control py-4" name="nombre" id="nombre" type="text" placeholder="Ingrese nombres" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="InsertarApellido">Apellidos</label>
                                                <input class="form-control py-4" name="apellido" id="apellido" type="text" placeholder="Ingrese apellidos" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="InsertarUsuario">Usuario</label>
                                        <input class="form-control py-4" name="usuario" id="usuario" type="text" aria-describedby="emailHelp" placeholder="Ingresar nombre de usuario" required />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="InsertarContraseña">Contraseña</label>
                                                <input class="form-control py-4" name="contraseña" id="contraseña" type="password" placeholder="Ingresar contraseña" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="small mb-1" for="rol">Rol </label>
                                                <select name="rol" class="form-control" name="rol" id="rol" required>
                                                    <option disabled>Seleccione un tipo de usuario</option>
                                                    <option value="1">administrador</option>
                                                    <option value="2">instructor</option>
                                                    <option value="3">coordinador</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="InsertarUsuario">Correo electronico</label>
                                                <input class="form-control py-4" name="correo" id="correo" type="email" placeholder="Ingresar su correo electronico"required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="InsertarUsuario">telefono</label>
                                                <input class="form-control py-4" name="telefono" id="telefono" type="int" placeholder="Ingresar su correo electronico"required />
                                            </div>

                                            <input type="submit" class="btn btn-primary btn-block" value="Guardar">
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- modal eliminar -->
            <div id="eliminar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- formulario -->
                            <h4>¿Seguro de eliminar usuario?</h4>
                            <form action="eliminar.php" id="formulario" role="form" method="POST">
                                <input type="hidden" name="id" id="delete_id">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-success">Eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>



        <script>
            $('.editbtn').on('click', function() {
                $tr = $(this).closest('tr');
                var datos = $tr.children("td").map(function() {
                    return $(this).text();
                });
                $('#update_id').val(datos[0]);
                $('#nombre').val(datos[1]);
                $('#apellido').val(datos[2]);
                $('#usuario').val(datos[3]);
                $('#contraseña').val(datos[4]);
                $('#rol').val(datos[5]);
                $('#correo').val(datos[6]);
                $('#telefono').val(datos[7]);

            });
        </script>

        <script>
            $('.deletebtn').on('click', function() {
                $tr = $(this).closest('tr');
                var datos = $tr.children("td").map(function() {
                    return $(this).text();
                });
                $('#delete_id').val(datos[0]);

            });
        </script>
        <script>
        $(document).ready(function() {
                $('#dataTable').DataTable( {
                    language: {
                        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                    }
                    
                });
                
            } );
            
            </script>

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