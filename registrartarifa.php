<?php
    include 'conexion.php';
    $tarifa=$_POST['tarifa'];
    $monto=$_POST['monto'];

    $sql="INSERT INTO tarifa(tarifa, monto) VALUE('".$tarifa."','".$monto."')";
    
    if($datos=mysqli_query($conexion, $sql)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardo correctamente";
    }
?>