<?php 
include ('funciones_user.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $miconexion=conectar_bd('', 'login');
    $resultado = consulta($miconexion, "INSERT INTO usuarios (nombre, apellido, usuario, pw, rol, correo, telefono) VALUES ('{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}'");

    if($resultado)
        {
            echo "<script>alert('Se han actualizado los cambios correctamente, actualice la p\u00Elgina para ver los cambios'); window.location='/usuarios/consultar_user.php';</script>";  
        }
        header("Location: consultar_user.php");

    ?>