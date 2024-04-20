<?php
include 'conexion.php';
$Id_servo = $_POST['Id_servo'];

$sql = "DELETE FROM servo WHERE Id_servo='".$Id_servo."'";

if($datos=mysqli_query($conexion, $sql)){
    echo "Servo eliminado correctamente";
}else{
    echo "Error al Eliminar";
}
?>