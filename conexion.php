<?php 

    $conexion = mysqli_connect('localhost', 'root', '', 'login') or die (mysqli_error($mysqli));
    
    
    insertar($conexion);

    function insertar($conexion){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];

    $resultado = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña, rol) VALUES ('{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}')";
    mysqli_query($conexion, $resultado);
    mysqli_close($conexion);
    header("Location: inicio.php");
    }


    function conectar_bd($clave,$basedatos)
    {
        $conexion = new mysqli('localhost', 'root', 'root', 'login');

        if ($conexion->connect_error)
        {
            die('Error de conexion (' . $conexion->connect_errno . ') '. $conexion->connect_error);

        }   
    return $conexion;
    }



?>