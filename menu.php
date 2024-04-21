<?php
    session_start();
    $idusuario=$_SESSION['id'];
    $correo=$_SESSION['loggedin'];
    if(!isset($_SESSION['loggedin'])){
        echo '<script language="javascript">alert("Tienes que acceder con usuario y contraseña"); location.href="index.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al sistema de estacionamiento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="menu.php" class="nav-link active" aria-current="page">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','registrar.php');" class="nav-link">Registro</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','cajones.php');" class="nav-link">Cajones</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','clientes.php');" class="nav-link">Clientes</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','vehiculos.php');" class="nav-link">Vehiculos</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','tarifas.php');" class="nav-link">Tarifas</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','encargados.php');" class="nav-link">Encargados</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="cargarDiv('#contenido','reportes.php');" class="nav-link">Reportes</a>
        </li>
        <li class="nav-item ">
            <a href="#" onclick="salir();" class="nav-link">Cerrar Sesión</a>
        </li>
    </ul>
</div>
<!-- Aqui va el contenido -->
    <div class="p-2 w-100 bd-highlight" id="contenido">
        <?php
            include 'inicio.php'
        ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</html>