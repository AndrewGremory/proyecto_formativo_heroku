<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña']; 
session_start();
$_SESSION['usuario']=$usuario;

// include('conexion.php');

// $conexion = new mysqli('localhost', 'root', '', 'login');
$conexion=mysqli_connect("localhost", "root", "", "login");
$consulta="SELECT * FROM usuarios where usuario ='$usuario' and pw='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">USUARIO O CORREO INCORRECTO</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);                        