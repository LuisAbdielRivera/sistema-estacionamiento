<?php
include 'conexion.php';
$Id_vehiculo = $_POST['Id_vehiculo'];

$sql = "DELETE FROM vehiculo WHERE Id_vehiculo ='".$Id_vehiculo."'";

if($datos=mysqli_query($conexion, $sql)){
    echo "Vehiculo eliminado correctamente";
}else{
    echo "Error al Eliminar";
}
?>