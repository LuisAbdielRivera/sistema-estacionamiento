<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Password</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
</html>
<?php
    include 'conexion.php';
    session_start();

    // Validar si se reciben parametros del metodo POST
    if(!isset($_POST['usuario'],$_POST['contrasena'])){
        header('Location:index.php');
    }

    //Evitar inyección SQL
    if($stmt=$conexion->prepare('SELECT Id_empleado, usuario, correo, contrasena FROM empleados WHERE usuario=?')){
        $stmt->bind_param('s', $_POST['usuario']);
        $stmt->execute();
    }

    // Verificar si lo ingresado coincide con la BD
    $stmt->store_result();
    if($stmt->num_rows>0){
        $stmt->bind_result($Id_empleado, $usuario, $correo, $contrasena);
        $stmt->fetch();
        if($_POST['contrasena']===$contrasena){
            session_regenerate_id();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['name']=$_POST['usuario'];
            $_SESSION['correo']=$_POST['correo'];
            $_SESSION['id']=$Id_empleado;
            header('Location:menu.php');
        }else{
            echo '<script language="javascript">Swal.fire({
                icon: "error",
                title: "Contraseña incorrecta",
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = "index.php";
            });</script>';
        }
    }else{
        echo '<script language="javascript">Swal.fire({
            icon: "error",
            title: "Usuario incorrecto",
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = "index.php";
        });</script>';
    }$stmt->close();
?>