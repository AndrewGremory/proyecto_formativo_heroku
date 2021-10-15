<?php
include_once("conexion.php");

$id =$_POST["id"];


$registros = mysqli_query($con2, "SELECT * FROM usuarios WHERE id_usuario='$id'") or die("Problemas en el select consulta".mysqli_error($con2));

if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($con2, "DELETE FROM usuarios WHERE id_usuario='$id'") or die("Problemas eliminando registros".mysqli_error($con2));    

    header("Location: consultar_user.php");

}else{
    echo "No existe el usuario";

}
mysqli_close($con2);

