<?php
    include 'conexion.php';
    $matricula=$_POST['matricula'];
    $modelo=$_POST['modelo'];
    $color=$_POST['color'];
    $puertas=$_POST['puertas'];
    $tipo=$_POST['tipo'];
    $Id_cliente=$_POST['Id_cliente'];

    $sql="INSERT INTO vehiculo(matricula, modelo, color, puertas, tipo, Id_cliente) VALUE('".$matricula."','".$modelo."','".$color."','".$puertas."','".$tipo."','".$Id_cliente."')";
    
    if($datos=mysqli_query($conexion, $sql)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardo correctamente";
    }
?>