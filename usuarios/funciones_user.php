<?php 

    $conexion = mysqli_connect('bxec8kf0gltlhhsgngsn-mysql.services.clever-cloud.com', 'ublssitbvwxpxjcf', 'yWFy3KRFzjNXbOzHXFQX', 'bxec8kf0gltlhhsgngsn') or die (mysqli_error($mysqli));
    
    function diferencia($conexion){
        if (isset($_POST['enviar'])){
            insertar($conexion);
        }

        if(isset($_POST['consultar'])){ 
            consulta($conexion);
        }

        if(isset($_POST['eliminar'])){
            eliminar($conexion);
        }
    }
    
    insertar($conexion);

    function insertar($conexion){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $resultado = "INSERT INTO usuarios (nombre, apellido, usuario, pw, rol, correo, telefono) VALUES ('{$nombre}', '{$apellido}', '{$usuario}', '{$contraseña}', '{$rol}', '{$correo}', '{$telefono}')";
    mysqli_query($conexion, $resultado);
    mysqli_close($conexion);
    header("Location: consultar_user.php");
    }

    function eliminar($conexion){

    $usuario = $_POST['usuario'];


    $resultado = "DELETE FROM usuarios WHERE usuario='$usuario'";
    mysqli_query($conexion, $resultado);
    mysqli_close($conexion);
    }
    header("Location: consultar_user.php");


    function conectar_bd($clave,$basedatos)
    {
        $conexion = new mysqli('bxec8kf0gltlhhsgngsn-mysql.services.clever-cloud.com', 'ublssitbvwxpxjcf', 'yWFy3KRFzjNXbOzHXFQX', 'bxec8kf0gltlhhsgngsn');

        if ($conexion->connect_error)
        {
            die('Error de conexion (' . $conexion->connect_errno . ') '. $conexion->connect_error);

        }   
    return $conexion;
    }

    function consulta ($conexion){
        $consulta = "SELECT * FROM usuarios";
        $resultado =  mysqli_query($conexion, $consulta);

        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$fila['id_usuario'];
            echo "<td>".$fila['nombre'];;
            echo "<td>".$fila['apellido'];;
            echo "<td>".$fila['usuario'];;
            echo "<td>".$fila['rol'];;
            echo "<tr>";
        }
        header("Location: consultar_user.php");

        mysqli_close($conexion);
    }

?>