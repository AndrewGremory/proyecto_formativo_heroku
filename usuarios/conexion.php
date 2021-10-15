<?php 
    $con2 = mysqli_connect('localhost', 'root', '', 'login') or die (mysqli_error($mysqli));

    $contraseña="";
    $usuario="root";
    $bd="login";
    try{
        $con = new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $contraseña);
    // echo "<script>alert('La conexion se realizó correctamente')</script>";
    } catch (Exception $e) {
        echo "<script>alert('Ocurrió un error en la conexion')</script>".$e->getMessage();
    }


?>