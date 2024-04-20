<?php
include 'conexion.php';
$Id_cajon = $_POST['Id_cajon'];
$status = $_POST['status'];

$sql = "UPDATE cajon SET status='1' WHERE Id_cajon='".$Id_cajon."'";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al Actualizar"; 
    echo $sql;
}
?>