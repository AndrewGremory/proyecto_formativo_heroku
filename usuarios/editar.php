<?php
include_once("conexion.php");

$id =$_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$rol = $_POST["rol"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

$registros = mysqli_query($con2, "SELECT * FROM usuarios WHERE id_usuario='$id'") or die("Problemas en el select consulta".mysqli_error($con2));

if ($reg = mysqli_fetch_array($registros)) {
    $registro = mysqli_query($con2, "UPDATE usuarios set nombre='$nombre', apellido='$apellido', usuario='$usuario', pw='$contraseña', rol='$rol', correo='$correo', telefono='$telefono' WHERE id_usuario = '$id'") or die("Problemas en el select".mysqli_error($con2));
    

    header("Location: consultar_user.php");
    echo "<script language='JavaScript'>alert('Grabacion Correcta');</script>";   
}else
echo "No existe el usuario";

