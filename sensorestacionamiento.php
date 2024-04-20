<?php
include 'conexion.php';
$ocupado=$_GET['ocupado'];
$numero=$_GET['numero'];

if($ocupado==1){
    $query="UPDATE cajon SET ocupado='".$ocupado."' WHERE numero='".$numero."'";
    if($datos=mysqli_query($conexion, $query)){
        echo "Hay un vehiculo en el cajon";
    }
}else{
    $query="UPDATE cajon SET ocupado='".$ocupado."' WHERE numero='".$numero."'";
    if($datos=mysqli_query($conexion, $query)){
        echo "No hay vehiculo";
    }
}

?>