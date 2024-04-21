<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Actualizar Encargado</h1>
    <?php
    include 'conexion.php';
    $Id_empleado = $_POST['Id_empleado'];
    $query="SELECT * FROM empleados WHERE Id_empleado='".$Id_empleado."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmencargados" name="frmencargados">
                <fieldset>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" value="<?php echo $result['nombre'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input id="direccion" name="direccion" type="text" class="form-control" value="<?php echo $result['direccion'];?>" />
                    </div>
                    <div class="form-group">
                        <label for="telefono">Numero de Telefono:</label>
                        <input id="telefono" name="telefono" type="number" class="form-control" value="<?php echo $result['telefono'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="correo">Email:</label>
                        <input id="correo" name="correo" type="email" class="form-control" value="<?php echo $result['correo'];?>" required />
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input id="usuario" name="usuario" type="text" class="form-control" value="<?php echo $result['usuario'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input id="contrasena" name="contrasena" type="password" class="form-control" value="<?php echo $result['contrasena'];?>" required />
                    </div>
                </fieldset>
                <input class="btn btn-warning btn-block" onclick="actualizarEncargado(<?php echo $Id_empleado;?>);" type="submit" value="Actualizar" />
                <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar" />
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
