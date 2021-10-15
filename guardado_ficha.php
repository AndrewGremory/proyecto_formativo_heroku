<?php 
include ('validacion.php');

    $ficha = $_POST['ficha'];
    $tipo_programa = $_POST['tipo_programa'];
    $nombre_programa = $_POST['nombre_programa'];
    $lider_ficha = $_POST['lider_ficha'];

    $miconexion=conectar_bd('root', 'login');
    $resultado = consulta($miconexion, "INSERT INTO fichas VALUES ('{$ficha}', '{$tipo_programa}', '{$nombre_programa}', '{$lider_ficha}'");

    if($resultado)
        {
            echo "Guardado exitoso";   
        }
    ?>