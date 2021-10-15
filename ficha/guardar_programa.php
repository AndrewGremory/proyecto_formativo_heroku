<?php 
include('funciones.php');

    $nombre=$_POST['nombre'];


    $miconexion=conectar_bd('', 'login');
    $resultado=consulta($miconexion, "INSERT into programa  values (NULL, '{$nombre}') ");
    if ($resultado)
        {
            echo 'Guardado exitoso';

        }
    mysqli_close($miconexion);
    header("Location: agregar_ficha.php");
    ?>