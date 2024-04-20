<?php
include 'conexion.php';
$Id_cajon = $_POST['Id_cajon'];

$sql = "DELETE FROM cajon WHERE Id_cajon='".$Id_cajon."'";

if($datos=mysqli_query($conexion, $sql)){
    echo "Cajon eliminado correctamente";
}else{
    echo "Error al Eliminar";
}
?>