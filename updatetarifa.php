<?php
include 'conexion.php';
$Id_tarifa = $_POST['Id_tarifa'];
$tarifa = $_POST['tarifa'];
$monto = $_POST['monto'];

$sql = "UPDATE `tarifa` SET `tarifa` = '".$tarifa."', `monto` = '".$monto."' WHERE Id_tarifa='".$Id_tarifa."'";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al Actualizar"; 
    echo $sql;
}
?>
