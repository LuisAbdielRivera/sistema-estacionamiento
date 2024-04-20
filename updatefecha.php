<?php
include 'conexion.php';
$Id_cajon=$_POST['Id_cajon'];

$sql="UPDATE cajon SET status='0' WHERE Id_cajon='".$Id_cajon."'";
if($datos=mysqli_query($conexion, $sql)){
    date_default_timezone_set("America/Mexico_City");
    $fechaSalida = date("Y-m-d");
    $horaSalida = date("H:i:s");
$query="UPDATE `registro` SET fechaSalida='".$fechaSalida."', horaSalida='".$horaSalida."' WHERE Id_cajon='".$Id_cajon."'";
if($datos=mysqli_query($conexion, $query)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error al actualizar";
}
}else{
    echo "Error al actualizar";
}
?>