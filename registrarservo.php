<?php
    include 'conexion.php';
    $descripcion=$_POST['descripcion'];
    $grados=$_POST['grados'];
    $estatus=$_POST['estatus'];

    $sql="INSERT INTO servo (descripcion, grados, estatus) VALUE('".$descripcion."','".$grados."', '".$estatus."')";
    
    if($datos=mysqli_query($conexion, $sql)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardo correctamente";
    }
?>