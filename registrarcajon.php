<?php
    include 'conexion.php';
    $numero=$_POST['numero'];

    $sql="INSERT INTO cajon(numero) VALUE('".$numero."')";
    
    if($datos=mysqli_query($conexion, $sql)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardo correctamente";
    }
?>