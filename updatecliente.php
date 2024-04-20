<?php
include 'conexion.php';
$Id_cliente = $_POST['Id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "UPDATE `cliente` SET `nombre` = '".$nombre."', `direccion` = '".$direccion."', `telefono` = '".$telefono."', `correo` = '".$correo."' WHERE Id_cliente='".$Id_cliente."'";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al Actualizar"; 
    echo $sql;
}
?>
