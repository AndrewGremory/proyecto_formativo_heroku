<?php 
    include('funciones.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $vpermiso1 = $_POST['p1'];
    $vpermiso2 = $_POST['p2'];
    $vpermiso3 = $_POST['p3'];
    $vpermiso4 = $_POST['p4'];
    $vpermiso5 = $_POST['p5'];
    $vpermiso6 = $_POST['p6'];
    $vpermiso7 = $_POST['p7'];
    $vpermiso8 = $_POST['p8'];
    $vpermiso9 = $_POST['p9'];
    $vpermiso10 = $_POST['p10'];
    $vpermiso11 = $_POST['p11'];
    $vpermiso12 = $_POST['p12'];
    $vpermiso13 = $_POST['p13'];

    $con=conectar_bd('', 'login');
    // $resultado = consulta($con, "INSERT INTO usuarios VALUES (NULL, '{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}', '{$vpermiso1}', '{$vpermiso2}', '{$vpermiso3}', '{$vpermiso4}', '{$vpermiso5}', '{$vpermiso6}', '{$vpermiso7}'{$vpermiso8}', '{$vpermiso9}', '{$vpermiso10}', '{$vpermiso11}', '{$vpermiso12}', '{$vpermiso13}')");

    // $resultado = consulta($con, "INSERT INTO usuarios VALUES (NULL, '{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}', $vpermiso1, $vpermiso2, $vpermiso3, $vpermiso4, $vpermiso5, $vpermiso6, $vpermiso7, $vpermiso8, $vpermiso9, $vpermiso10, $vpermiso11, $vpermiso12, $vpermiso13)");

    $resultado = consulta($con, "INSERT INTO usuarios VALUES (NULL, '{$vpermiso1}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");


    if ($resultado)
    {
        echo "Guardado exitoso";
    }
    mysqli_close($con);
    header("Location: consultar_user.php");


    ?>