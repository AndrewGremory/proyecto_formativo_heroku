<?php
$con2 = mysqli_connect('localhost', 'root', '', 'login') or die (mysqli_error($mysqli));

$id =$_POST["id"];
$tipo = $_POST["tipo_programa"];
$nombre = $_POST["nombre_programa"];
$lider = $_POST["lider_ficha"];

$registros = mysqli_query($con2, "SELECT * FROM fichas WHERE id_ficha='$id'") or die("Problemas en el select consulta".mysqli_error($con2));

if ($reg = mysqli_fetch_array($registros)) {
    $registro = mysqli_query($con2, "UPDATE fichas set id_ficha='$id', tipo_programa='$tipo', nombre_programa='$nombre', lider_ficha='$lider' WHERE id_ficha = '$id'") or die("Problemas en el select".mysqli_error($con2));
    

    header("Location: consultar_ficha.php");
    echo "<script language='JavaScript'>alert('Grabacion Correcta');</script>";   
}else
echo "No existe la ficha";

