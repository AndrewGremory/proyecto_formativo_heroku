<?php 
    include('config.php');

    $fase = $_POST['fase'];
    $actividad = $_POST['actividad'];
    $competencia = $_POST['competencia'];
    $resultado = $_POST['resultado'];
    $tipo_resultado = $_POST['tipo_resultado'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $estado = $_POST['estado'];
    $observacion = $_POST['observacion'];
    $id = $_POST['id'];
    $ficha = $_POST['ficha'];
    

    $registros = mysqli_query($con, "SELECT * FROM resultado_aprendizaje where id='$id'") or die("Problemas en el select consulta".mysqli_error($con));

    if($reg = mysqli_fetch_array($registros)){
        $registros = mysqli_query($con, "UPDATE resultado_aprendizaje set fase ='$fase', actividad ='$actividad', competencia ='$competencia', resultado ='$resultado', tipo ='$tipo_resultado', fecha_inicio ='$fecha_inicio', fecha_fin ='$fecha_fin', estado ='$estado', observaciones ='$observacion' WHERE id ='$id'") or die ("Problemas en el update".mysqli_error($con));

        echo "<script language='JavaScript'>alert('Grabacion Correcta');</script>"; 

        return header("Location: seguimiento.php");

    }else
    echo "Error, no se actualizó resultado de aprendizaje";
    



?>