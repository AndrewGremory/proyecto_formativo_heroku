<?php 
    include('funciones.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $vpermiso1 = $_POST['per1'];
    $vpermiso2 = $_POST['per2'];
    $vpermiso3 = $_POST['per3'];
    $vpermiso4 = $_POST['per4'];
    $vpermiso5 = $_POST['per5'];
    $vpermiso6 = $_POST['per6'];
    $vpermiso7 = $_POST['per7'];
    $vpermiso8 = $_POST['per8'];
    $vpermiso9 = $_POST['per9'];
    $vpermiso10 = $_POST['per10'];
    $vpermiso11 = $_POST['per11'];
    $vpermiso12 = $_POST['per12'];
    $vpermiso13 = $_POST['per13'];

    $con=conectar_bd('', 'login');
    // $resultado = consulta($con, "INSERT INTO usuarios VALUES (NULL, '{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}', '{$vpermiso1}', '{$vpermiso2}', '{$vpermiso3}', '{$vpermiso4}', '{$vpermiso5}', '{$vpermiso6}', '{$vpermiso7}'{$vpermiso8}', '{$vpermiso9}', '{$vpermiso10}', '{$vpermiso11}', '{$vpermiso12}', '{$vpermiso13}')");

    // $resultado = consulta($con, "INSERT INTO usuarios VALUES (NULL, '{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}', $vpermiso1, $vpermiso2, $vpermiso3, $vpermiso4, $vpermiso5, $vpermiso6, $vpermiso7, $vpermiso8, $vpermiso9, $vpermiso10, $vpermiso11, $vpermiso12, $vpermiso13)");

    $resultado = consulta($con, "INSERT INTO usuarios (id_usuario, nombre, apellido, usuario, pw, rol, correo, telefono, permiso1, permiso2, permiso3, permiso4, permiso5, permiso6, permiso7, permiso8, permiso9, permiso10, permiso11, permiso12, permiso13) VALUES (NULL, '{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}', '$vpermiso1', '$vpermiso2', '$vpermiso3', '$vpermiso4', '$vpermiso5', '$vpermiso6', '$vpermiso7', '$vpermiso8', '$vpermiso9', '$vpermiso10', '$vpermiso11', '$vpermiso12', '$vpermiso13' )");


    if ($resultado)
    {
        echo "Guardado exitoso";
    }
    mysqli_close($con);
    header("Location: consultar_user.php");


    ?>