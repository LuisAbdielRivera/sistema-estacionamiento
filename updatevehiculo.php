<?php
include 'conexion.php';
$Id_vehiculo = $_POST['Id_vehiculo'];
$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$puertas = $_POST['puertas'];
$tipo = $_POST['tipo'];
$Id_cliente = $_POST['Id_cliente'];

$sql = "UPDATE `vehiculo` SET `matricula` = '".$matricula."', `modelo` = '".$modelo."', `color` = '".$color."', `puertas` = '".$puertas."', `tipo` = '".$tipo."', `Id_cliente` = '".$Id_cliente."' WHERE Id_vehiculo='".$Id_vehiculo."'";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al Actualizar"; 
    echo $sql;
}
?>
