<?php 
    include('funciones.php');    


    $ficha = $_POST['ficha'];
    $tipoprograma = $_POST['tipo_programa'];
    $nombreprograma = $_POST['nombre_programa'];
    $liderficha = $_POST['lider_ficha'];
    
    $miconexion=conectar_bd('', 'login');
    $resultado=consulta($miconexion, "INSERT INTO fichas VALUES ('$ficha', '{$tipoprograma}', '{$nombreprograma}', '{$liderficha}')");

    // $resultado = "INSERT INTO fichas (id_ficha, tipo_programa, nombre_programa, lider_ficha, ) VALUES ('{$ficha}', '{$tipoprograma}', '{$nombreprograma}', '{$liderficha}')";

    if ($resultado)
        {
            echo "Guardado exitoso";
        }
    mysqli_close($miconexion);
    header("Location: consultar_ficha.php");
    
?>
