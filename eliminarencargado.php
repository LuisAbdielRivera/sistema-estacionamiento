<?php
include 'conexion.php';
$Id_empleado = $_POST['Id_empleado'];

$sql = "DELETE FROM empleados WHERE Id_empleado ='".$Id_empleado."'";

if($datos=mysqli_query($conexion, $sql)){
    echo "Empleado eliminado correctamente";
}else{
    echo "Error al Eliminar";
}
?>