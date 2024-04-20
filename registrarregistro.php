<?php
    include 'conexion.php';
    $Id_vehiculo=$_POST['Id_vehiculo'];
    $Id_cajon=$_POST['Id_cajon'];
    $Id_tarifa=$_POST['Id_tarifa'];
    $Id_empleado='1'; //$_POST['Id_empleado'];
    date_default_timezone_set("America/Mexico_City");
    $fechaIngreso = date("Y-m-d");
    $horaIngreso = date("H:i:s");

    $sql="INSERT INTO `registro` (`Id_vehiculo`, `Id_cajon`, `Id_empleado`, `fechaIngreso`, `horaIngreso`, `Id_tarifa`) VALUE('".$Id_vehiculo."','".$Id_cajon."','".$Id_empleado."','".$fechaIngreso."','".$horaIngreso."', '".$Id_tarifa."')";
    
    if($datos=mysqli_query($conexion, $sql)){
        $query="UPDATE cajon SET status='1' WHERE Id_cajon='".$Id_cajon."'";
        if($datos2=mysqli_query($conexion, $query)){
            echo "Registro exitoso";
        }else{
            echo "Error al registrar";
        }
    }else{
        echo "Error no se guardo correctamente";
    }
?>