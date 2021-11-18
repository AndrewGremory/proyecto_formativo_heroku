<?php
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;


$id_ficha = $_POST['id'];

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);
    $id_ficha = $_POST['id'];

    if ($i != 0) {
        
        $datos = explode(";", $linea);


        $fase                = !empty($datos[0])  ? ($datos[0]) : '';
		$actividad                = !empty($datos[1])  ? ($datos[1]) : '';
        $competencia               = !empty($datos[2])  ? ($datos[2]) : '';
        $resultado               = !empty($datos[3])  ? ($datos[3]) : '';
        $tipo               = !empty($datos[4])  ? ($datos[4]) : '';
        $fecha_inicio               = !empty($datos[5])  ? ($datos[5]) : '';
        $fecha_fin               = !empty($datos[6])  ? ($datos[6]) : '';
        $estado               = !empty($datos[7])  ? ($datos[7]) : '';
        $observaciones               = !empty($datos[8])  ? ($datos[8]) : '';

if( !empty($resultado) ){
    $checkemail_duplicidad = ("SELECT * FROM resultado_aprendizaje WHERE resultado='".($resultado)."' ");
    // $checkemail_duplicidad = ("SELECT rap_resultado FROM rap WHERE rap_resultado='".($resultado)."' ");

            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidad == 0 ) { 

$insertarData = "INSERT INTO resultado_aprendizaje( 
    id,
    fase,
    actividad,
    competencia,
    resultado,
    tipo,
    fecha_inicio,
    fecha_fin,
    estado,
    observaciones
) VALUES(
    '$id_ficha',
    '$fase',
    '$actividad',
    '$competencia',
    '$resultado',
    '$tipo',
    '$fecha_inicio',
    '$fecha_fin',
    '$estado',
    '$observaciones'
)";
mysqli_query($con, $insertarData);
header("Location: consultar_ficha.php");

        
} 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    $updateData =  ("UPDATE resultado_aprendizaje SET 
        id ='" .$id_ficha. "',
        fase='" .$fase. "',
		actividad='" .$actividad. "',
        competencia='" .$competencia. "'  
        resultado='" .$resultado. "'  
        tipo='" .$tipo. "'  
        fecha_inicio='" .$fecha_inicio. "'  
        fecha_fin='" .$fecha_fin. "'  
        estado='" .$estado. "'  
        observaciones='" .$observaciones. "'  
        WHERE competencia='".$competencia."'
    ");
    $result_update = mysqli_query($con, $updateData);
    } 
  }

 $i++;

 header("Location: consultar_ficha.php");

}

?>

<a href="index.php">Atras</a>