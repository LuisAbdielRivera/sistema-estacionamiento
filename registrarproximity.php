<?php
    include "conexion.php";
    $distancia=$_GET["distancia"];
    $ocupado=$_GET["ocupado"];
    date_default_timezone_set("America/Mexico_City");
    $fecha = date("Y-m-d");
    $hora = date("H:i:s");

    $sql="INSERT INTO sensorproximidad(distancia, fecha, hora, ocupado) VALUES ('".$distancia."','".$fecha."','".$hora."','".$ocupado."')";
    
    if($datos=mysqli_query($conexion, $sql)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardo correctamente";
    }
?>
