<?php
include 'conexion.php';
$Id_empleado = $_POST['Id_empleado'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "UPDATE `empleados` SET `nombre` = '".$nombre."', `direccion` = '".$direccion."', `telefono` = '".$telefono."', `correo` = '".$correo."', usuario='".$usuario."', contrasena='".$contrasena."' WHERE Id_empleado='".$Id_empleado."'";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al Actualizar"; 
    echo $sql;
}
?>