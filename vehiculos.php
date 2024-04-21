<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehiculos</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Vehiculos</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmvehiculos" name="frmvehiculos">
                <fieldset>
                    <div class="form-group">
                        <label for="matricula">Matricula:</label>
                        <input id="matricula" name="matricula" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input id="modelo" name="modelo" type="number" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input id="color" name="color" type="color" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="puertas">Puertas:</label>
                        <input id="puertas" name="puertas" type="number" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <input id="tipo" name="tipo" type="text" class="form-control" required />
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
                <input onclick="registrarVehiculo();" type="submit" value="Guardar" class="btn btn-primary btn-block"/>
            </form>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <?php include "consultarvehiculo.php"; ?>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
