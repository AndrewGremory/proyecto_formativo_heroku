<?php 
    $con2 = mysqli_connect('bxec8kf0gltlhhsgngsn-mysql.services.clever-cloud.com', 'ublssitbvwxpxjcf', 'yWFy3KRFzjNXbOzHXFQX', 'bxec8kf0gltlhhsgngsn') or die (mysqli_error($mysqli));

    $contraseña="yWFy3KRFzjNXbOzHXFQX";
    $usuario="ublssitbvwxpxjcf";
    $bd="bxec8kf0gltlhhsgngsn";
    try{
        $con = new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $contraseña);
    // echo "<script>alert('La conexion se realizó correctamente')</script>";
    } catch (Exception $e) {
        echo "<script>alert('Ocurrió un error en la conexion')</script>".$e->getMessage();
    }


?>