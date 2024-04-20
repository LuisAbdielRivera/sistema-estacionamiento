<?php
include 'conexion.php';
$Id_tarifa = $_POST['Id_tarifa'];

$sql = "DELETE FROM tarifa WHERE Id_tarifa ='".$Id_tarifa."'";

if($datos=mysqli_query($conexion, $sql)){
    echo "Tarifa eliminada correctamente";
}else{
    echo "Error al Eliminar";
}
?>