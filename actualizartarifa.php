<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Actualizar Cliente</h1>
    <?php
    include 'conexion.php';
    $Id_tarifa = $_POST['Id_tarifa'];
    $query="SELECT * FROM tarifa WHERE Id_tarifa='".$Id_tarifa."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
    ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmtarifa" name="frmtarifa">
                <fieldset>
                    <div class="form-group">
                        <label for="tarifa">Tarifa:</label>
                        <input id="tarifa" name="tarifa" type="number" class="form-control" value="<?php echo $result['tarifa'];?>" required />
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto:</label>
                        <input id="monto" name="monto" type="text" class="form-control" value="<?php echo $result['monto'];?>" required />
                    </div>
                </fieldset>
                <input class="btn btn-warning btn-block" onclick="actualizarTarifa(<?php echo $Id_tarifa;?>);" type="submit" value="Actualizar">
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
