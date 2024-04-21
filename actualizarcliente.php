<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Cliente</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Actualizar Cliente</h1>
    <?php
    include 'conexion.php';
    $Id_cliente = $_POST['Id_cliente'];
    $query="SELECT * FROM cliente WHERE Id_cliente='".$Id_cliente."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmclientes" name="frmclientes">
                <fieldset>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" value="<?php echo $result['nombre'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input id="direccion" name="direccion" type="text" class="form-control" value="<?php echo $result['direccion'];?>" />
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Numero de Telefono:</label>
                            <input id="telefono" name="telefono" type="number" class="form-control" value="<?php echo $result['telefono'];?>" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="correo">Email:</label>
                            <input id="correo" name="correo" type="email" class="form-control" value="<?php echo $result['correo'];?>" required />
                        </div>
                    </div>
                </fieldset>
                <a type="button" class="btn btn-warning btn-block" onclick="actualizarCliente(<?php echo $Id_cliente;?>);">Actualizar</a>
                <a type="button" class="btn btn-danger btn-block" onclick="cancelar();">Cancelar</a>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
