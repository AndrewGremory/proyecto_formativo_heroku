<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro usuario</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear cuenta</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="agregar.php">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="InsertarNombre">Nombres</label>
                                                    <input class="form-control py-4" id="InsertarNombre" type="text" placeholder="Ingrese nombres" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="InsertarApellido">Apellidos</label>
                                                    <input class="form-control py-4" id="InsertarApellido" type="text" placeholder="Ingrese apellidos" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="InsertarUsuario">Usuario</label>
                                            <input class="form-control py-4" id="InsertarUsuario" type="text" aria-describedby="emailHelp" placeholder="Ingresar nombre de usuario" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="InsertarContraseña">Contraseña</label>
                                                    <input class="form-control py-4" id="InsertarContraseña" type="password" placeholder="Ingresar contraseña" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="InsertarContraseña">Confirmar contraseña</label>
                                                    <input class="form-control py-4" id="InsertarContraseña" type="password" placeholder="Confirmar contraseña" />
                                                </div>
                                            </div>
                                           <div class="col-md-10">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="Rol">Rol </label>
                                                    <select name="rol" class="form-control py-4" id="Rol">
                                                        <option disabled>Seleccione un tipo de usuario</option>
                                                        <option value="1">administrador</option>
                                                        <option value="2">instructor</option>
                                                        <option value="3">coordinador</option>
                                                    </select>
                                                </div>
                                            </div> 

                                            <!-- <div class="form-group">

                                                
                                                <select name="Rol" class="form-control" id="Rol">
                                                            
                                                    <?php
                                                    include("conexion.php");
                                                    $getUsuarios1 = "SELECT * FROM  usuarios ORDER BY id_usuario";
                                                    $getUsuarios2 = mysqli_query ($getUsuarios1);
                                                
                                                
                                                    while($row = mysqli_fetch_array ($getUsuarios2))
                                                    {
                                                        $id_usuario =$row['id'];
                                                        $nombre =$row['nombre'];
                                                        $apellido = $row['apellido'];
                                                        $usuario = $row['usuario'];
                                                        $contraseña = $row['contraseña'];
                                                        $rol = $row['rol'];
                                                        
                                                        ?>
                                                        <option value="<?php echo $id_usuario; ?>"><?php echo $rol; ?></option>
                                                            
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                
                                                
                                            </div> -->
                                        </div>
                                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="inicio.php">Create Account</a></div>
                                        <button type="submit" class="btn btn-default">Crear</button>
                                    </form>
                                </div> 
        </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
