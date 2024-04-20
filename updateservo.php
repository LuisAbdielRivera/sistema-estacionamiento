<?php
    include 'conexion.php';
    $Id_servo=$_POST['Id_servo'];
    $descripcion=$_POST['descripcion'];
    $grados=$_POST['grados'];
    $estatus=$_POST['estatus'];

    $sql = "UPDATE `servo` SET `descripcion` = '".$descripcion."', `grados` = '".$grados."', `estatus` = '".$estatus."' WHERE Id_servo='".$Id_servo."'";

    if ($datos = mysqli_query($conexion, $sql)) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error al Actualizar"; 
        echo $sql;
    }
?>