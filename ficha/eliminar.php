<?php
include_once("config.php");

$id =$_POST["id"];


$registros = mysqli_query($con, "SELECT * FROM resultado_aprendizaje WHERE id='$id'") or die("Problemas en el select consulta".mysqli_error($con));

if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($con, "DELETE FROM resultado_aprendizaje WHERE resultado='$id'") or die("Problemas eliminando registros".mysqli_error($con));    

    header("Location: seguimiento.php");

    
}else{
    echo "No existe la ficha".$id;

}
mysqli_close($con);
