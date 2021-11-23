<?php include('config.php');
$fichas = "SELECT * from fichas";
$ficha = $_POST['ficha'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Consulta ficha</title>
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
                    <br>
                    <div class="col"><a href="consultar_ficha.php" class="btn btn-outline-dark" role="button">Volver</a>
                    <h3 class="mt-4">
                        Seguimiento de ficha 
                        
                        <?php echo $ficha; ?>
                        
        </div>
                    </h3>
                    <hr>
                        <!-- SELECIONNAR EXCEL -->
                            <div class="card-body">
                                <div class="col-md-7">
                                <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data">
                                    <div class="file-input text-center ">
                                        <input type="hidden"  name="id" value="<?php echo $ficha; ?>">
                                        <input type="file" name="dataCliente" id="file-input" class="file-input__input"> 
                                        <label class="file-input__label" for="file-input">
                                        <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                                        <!-- <span  class=" btn btn-primary">Elegir Archivo Excel</span>                                 -->
                                        <input type="submit" name="subir" class="btn btn-primary" value="Subir Excel"/>
        
                                    </label >
        
                                    </div>
                                
                                </form>
                                </div>
        
                        </div>
                        
                    <div class="row">
                    <?php
                        // header("Content-Type: text/html;charset=utf-8");
                        include('config.php');
                        
                        $sqlClientes = ("SELECT * FROM resultado_aprendizaje where id = $ficha");
                        $queryData   = mysqli_query($con, $sqlClientes);
                        $total_client = mysqli_num_rows($queryData);
                        ?>
                                    
                    <h6 class="text-center">
                        Resultados de aprendizaje <strong>(<?php echo $total_client; ?>)</strong>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Agregar_resultado">Agregar resultado de Aprendizaje</button>

                    </h6>
                            
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fase</th>
                                        <th>Actividad de proyecto</th>
                                        <th>Competencia</th>
                                        <th>Resultado de <br> aprendizaje</th>
                                        <th>Tipo de <br> resultado</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha fin</th>
                                        <th>Estado de resultado</th>
                                        <th>Observaciones</th>
                                        <th>Opciones</th>

                                
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Fase</th>
                                        <th>Actividad de proyecto</th>
                                        <th>Competencia</th>
                                        <th>Resultado de <br> aprendizaje</th>
                                        <th>Tipo de <br> resultado</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha fin</th>
                                        <th>Estado de resultado</th>
                                        <th>Observaciones</th>
                                        <th>Opciones</th>

      

        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    
                                    <?php 
                                        $i = 1;
                                        while ($data = mysqli_fetch_array($queryData)) { ?>
                                        <tr>
                                        <th scope="row"><?php echo $i++; ?></th>
                                        <td><?php echo $data['fase']; ?></td>
                                        <td><?php echo $data['actividad']; ?></td>
                                        <td><?php echo $data['competencia']; ?></td>
                                        <td><?php echo $data['resultado']; ?></td>
                                        <td><?php echo $data['tipo']; ?></td>
                                        <td><?php echo $data['fecha_inicio']; ?></td>
                                        <td><?php echo $data['fecha_fin']; ?></td>
                                        <td><?php echo $data['estado']; ?></td>
                                        <td><?php echo $data['observaciones']; ?></td>
                                        <td> <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button> <hr>
                                        <button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash"></i></button> </td>
                                        <!-- <td> <button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash"></i></button> </td> -->
        
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            
            
            <!-- modal agregar resultado -->

            <div class="modal fade bd-example-modal-lg" id="Agregar_resultado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Resultados de aprendizaje</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- FORMULARIO -->
                        <form>
                            <div class="form-group">
                                <label for="fase">Fase</label>
                                <input type="text" class="form-control" name="fase" id="form_fase" placeholder="Ingrese fase" required>
                            </div>
                            <div class="form-group">
                                <label for="actividad">Actvidad de proyecto</label>
                                <textarea class="form-control" id="form_actividad" placeholder="Ingrese Actividad de proyecto" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="competencia">Competencia</label>
                                <textarea class="form-control" id="form_competencia" placeholder="Ingrese Competencia" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="resultado">Resultado de Aprendizaje</label>
                                <textarea class="form-control" id="form_resultado" rows="3" placeholder="Ingrese Resultado de aprendizaje" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form_tipo_resultado">Tipo de resultado</label>
                                <select class="form-control" id="form_tipo_resultado">
                                    <option selected disabled>Seleccione tipo de resultado</option>
                                    <option>Específico</option>
                                    <option>Institucional</option>
                                    <option>Clave</option>
                                    <option>Transversal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fecha_inicio">Fecha de inicio </label>
                                <input type="date" class="form-control" id="form_fecha_inicio" placeholder="Fecha de inicio">
                            </div>
                            <div class="form-group">
                                <label for="fecha_fin">Fecha de fin </label>
                                <input type="date" class="form-control" id="form_fecha_fin" placeholder="Fecha de fin">
                            </div>
                            <div class="form-group">
                                <label for="form_estado_resultado">Estado de resultado</label>
                                <select name="estado" id="form_estado_resultado" class="form-control">
                                    <option selected disabled>Seleccione tipo de resultado</option>
                                    <option>Evaluado</option>
                                    <option>Pendiente</option>
                                    <option>En ejecución</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="observacion">Observaciones</label>
                                <textarea name="observacion" id="form_observacion" class="form-control" placeholder="¿Alguna observacion?" rows="10"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                            </form>
                    </div>
                    </div>
                </div>
            </div> 
            <!-- modal editar -->
            <div id="editar" class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- formulario -->
                                <!-- FORMULARIO -->
                                <form>
                                    <div class="form-group">
                                        <label for="fase">Fase</label>
                                        <input type="text" class="form-control" name="fase" id="fase" placeholder="Ingrese fase" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="actividad">Actvidad de proyecto</label>
                                        <textarea class="form-control" id="actividad" placeholder="Ingrese Actividad de proyecto" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="competencia">Competencia</label>
                                        <textarea class="form-control" id="competencia" placeholder="Ingrese Competencia" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="resultado">Resultado de Aprendizaje</label>
                                        <textarea class="form-control" id="resultado" rows="3" placeholder="Ingrese Resultado de aprendizaje" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo_resultado">Tipo de resultado</label>
                                        <select class="form-control" id="tipo_resultado">
                                            <option selected, disabled>Seleccione tipo de resultado</option>
                                            <option>Específico</option>
                                            <option>Institucional</option>
                                            <option>Clave</option>
                                            <option>Transversal</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_inicio">Fecha de inicio </label>
                                        <input type="date" class="form-control" id="fecha_inicio" placeholder="Fecha de inicio">
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_fin">Fecha de fin </label>
                                        <input type="date" class="form-control" id="fecha_fin" placeholder="Fecha de fin">
                                    </div>
                                    <div class="form-group">
                                        <label for="estado_resultado">Estado de resultado</label>
                                        <select name="estado" id="estado_resultado" class="form-control">
                                            <option selected, disabled>Seleccione tipo de resultado</option>
                                            <option>Evaluado</option>
                                            <option>Pendiente</option>
                                            <option>En ejecución</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="observacion">Observaciones</label>
                                        <textarea name="observacion" id="observacion" class="form-control" placeholder="¿Alguna observacion?" rows="10"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Editar</button>
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
            $('#fase').val(datos[0]);
            $('#actividad').val(datos[1]);
            $('#competencia').val(datos[2]);
            $('#resultado').val(datos[3]);
            $('#tipo_resultado').val(datos[4]);
            $('#fecha_inicio').val(datos[5]);
            $('#fecha_fin').val(datos[6]);
            $('#estado_resultado').val(datos[7]);
            $('#observacion').val(datos[8]);


        });
    </script>
    <script>
        $(document).ready(function() {
            var lenguaje = $('#dataTable').DataTable( {
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" 
                },
                "createdRow":function(row,data,index){
                    if (data[8] == "Evaluado"){
                        // $(row).addClass( 'important');
                        $('td', row).eq(7).css({
                            'background-color':'#008000',
                            'color':'white',
                        })
                    }
                    if (data[8] == "Pendiente"){
                        // $(row).addClass( 'important');
                        $('td', row).eq(7).css({
                            'background-color':'#008000',
                            'color':'white',
                        })
                    }
                }
            } );
            
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