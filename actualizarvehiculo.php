<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Actualizar Vehiculo</h1>
    <?php
    include 'conexion.php';
    $Id_vehiculo = $_POST['Id_vehiculo'];
    $query="SELECT * FROM vehiculo WHERE Id_vehiculo='".$Id_vehiculo."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmvehiculos" name="frmvehiculos">
                <fieldset>
                    <div class="form-group">
                        <label for="matricula">Matricula:</label>
                        <input id="matricula" name="matricula" type="text" class="form-control" value="<?php echo $result['matricula'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input id="modelo" name="modelo" type="number" class="form-control" value="<?php echo $result['modelo'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input id="color" name="color" type="color" class="form-control" value="<?php echo $result['color'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="puertas">Puertas:</label>
                        <input id="puertas" name="puertas" type="number" class="form-control" value="<?php echo $result['puertas'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <input id="tipo" name="tipo" type="text" class="form-control" value="<?php echo $result['tipo'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="Id_cliente">Selecciona el Cliente:</label>
                        <select id="Id_cliente" name="Id_cliente" class="form-control">
                            <option value="">-- Seleccione un cliente --</option>
                            <?php
                            include 'conexion.php';
                            $query="SELECT Id_cliente, nombre FROM cliente";
                            $ejecutar=$conexion->query($query);
                            while($result=$ejecutar->fetch_array()){
                                echo "<option value='".$result['Id_cliente']."'>".$result['nombre']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </fieldset>
                <input class="btn btn-warning btn-block" onclick="actualizarVehiculo(<?php echo $Id_vehiculo;?>);" type="submit" value="Actualizar">
                <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar">
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
