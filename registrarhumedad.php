<?php
include "conexion.php";

$humedad=$_GET["humedad"];
$temperatura=$_GET["temperatura"];
date_default_timezone_set("America/Mexico_City");
$fechaEncendido = date("Y-m-d");
$horaEncendido = date("H:i:s");

$query = "INSERT INTO sensorhumedad(humedad, temperatura, fechaEncendido, horaEncendido) VALUES ('$temperatura', '$humedad','$fechaEncendido','$horaEncendido')";

if(mysqli_query($conexion, $query)) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar los datos: ";
}

?>
