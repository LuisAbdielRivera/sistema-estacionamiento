<?php
include 'conexion.php';
$Id_cliente = $_POST['Id_cliente'];

$sql = "DELETE FROM cliente WHERE Id_cliente='".$Id_cliente."'";

if($datos=mysqli_query($conexion, $sql)){
    echo "Cliente eliminado correctamente";
}else{
    echo "Error al Eliminar";
}
?>