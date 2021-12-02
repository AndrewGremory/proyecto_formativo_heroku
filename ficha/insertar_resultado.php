<?php 
    include ('config.php');

    $ficha = $_POST['idform'];
    $fase = $_POST['form_fase'];
    $actividad = $_POST['form_actividad'];
    $competencia = $_POST['form_competencia'];
    $resultado = $_POST['form_resultado'];
    $tipo_resultado = $_POST['form_tipo_resultado'];
    $fecha_inicio = $_POST['form_fecha_inicio'];
    $fecha_fin = $_POST['form_fecha_fin'];
    $estado = $_POST['form_estado_resultado'];
    $observacion = $_POST['form_observacion'];

    $resultado = "INSERT INTO resultado_aprendizaje (ficha_id, fase, actividad, competencia, resultado, tipo, fecha_inicio, fecha_fin, estado, observaciones) VALUES ('{$ficha}','{$fase}','{$actividad}','{$competencia}','{$resultado}','{$tipo_resultado}','{$fecha_inicio}','{$fecha_fin}','{$estado}','{$observacion}')";


    if (mysqli_query($con, $resultado))
        {
            header("Location: seguimiento.php");
        }
    else{
        echo "Error, no se encontraron los siguientes valores=:".$id, $fase, $actividad, $competencia, $resultado,$tipo_resultado,$fecha_inicio,$fecha_fin,$estado, $observacion. "<br>" .mysqli_error($con); 
    }
    mysqli_close($con);



?>