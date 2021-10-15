<!DOCTYPE html>
<html lang="en">
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
                                <a class="nav-link" href="agregar_ficha.php">Agregar Ficha</a>
                                <a class="nav-link" href="consultar_ficha.php">Consulta de Fichas</a>
                            </nav>
                        </div>
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUsuarios" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../usuarios/agregar_user.php">Agregar usuario</a>
                                <a class="nav-link" href="../usuarios/consultar_user.php">Consulta de usuario</a>

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
        
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <h3 class="mt-4">
            Seguimiento de ficha
        </h3>
        <hr>


        <div class="card-body">
            <div class="col-md-7">
            <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
                <div class="file-input text-center">
                    <input  type="file" name="dataCliente" id="file-input" class="file-input__input"/>
                    <label class="file-input__label" for="file-input">
                    <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                    <span>Elegir Archivo Excel</span></label
                    >
                </div>
            <div class="text-center mt-5">
                <input type="submit" name="subir" class="btn-enviar" value="Subir Excel"/>
            </div>
            </form>
            </div>

            <div class="col-md-5">
        <?php
        header("Content-Type: text/html;charset=utf-8");
        include('config.php');
        $sqlClientes = ("SELECT * FROM rap ORDER BY id ASC");
        $queryData   = mysqli_query($con, $sqlClientes);
        $total_client = mysqli_num_rows($queryData);
        ?>

            <h6 class="text-center">
                Lista de Clientes <strong>(<?php echo $total_client; ?>)</strong>
            </h6>

                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1;
                    while ($data = mysqli_fetch_array($queryData)) { ?>
                    <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $data['nombre']; ?></td>
                    <td><?php echo $data['correo']; ?></td>
                    <td><?php echo $data['celular']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>

            </div>
        </div>

        </div>

    </div>
</div>