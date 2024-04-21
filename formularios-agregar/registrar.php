<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="../scripts/js/funciones.js"></script>
    <style>
        .centered-form {
            text-align: center;
        }
        
        .form-label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<h1 class="text-center mt-3">Registro</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form id="frmregistrar" name="frmregistrar" class="centered-form">
                <div class="form-group">
                    <label for="Id_vehiculo" class="form-label">Vehiculo</label>
                    <select class="form-control" id="Id_vehiculo" name="Id_vehiculo">
                        <option value="">-- Selecciona un Vehiculo --</option>
                        <?php
                        include '../conexion.php';
                        $query="SELECT Id_vehiculo, matricula, tipo FROM vehiculo";
                        $ejecutar=$conexion->query($query);
                        while($result=$ejecutar->fetch_array()){
                            echo "<option value='".$result['Id_vehiculo']."'>".$result['matricula']." - ".$result['tipo']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Id_cajon" class="form-label">Selecciona el Cajon</label>
                    <select class="form-control" id="Id_cajon" name="Id_cajon">
                        <option value="">-- Selecciona un Cajon --</option>
                        <?php
                        include 'conexion.php';
                        $query="SELECT Id_cajon, numero FROM cajon";
                        $ejecutar=$conexion->query($query);
                        while($result=$ejecutar->fetch_array()){
                            echo "<option value='".$result['Id_cajon']."'>".$result['numero']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Id_tarifa" class="form-label">Tarifa</label>
                    <select class="form-control" id="Id_tarifa" name="Id_tarifa">
                        <option value="">-- Selecciona una Tarifa --</option>
                        <?php
                        include 'conexion.php';
                        $query="SELECT Id_tarifa, tarifa FROM tarifa";
                        $ejecutar=$conexion->query($query);
                        while($result=$ejecutar->fetch_array()){
                            echo "<option value='".$result['Id_tarifa']."'>".$result['tarifa']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <a type="button" onclick="registrarRegistro();" class="btn btn-primary mt-4">Guardar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
