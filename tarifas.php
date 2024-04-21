<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Tarifas</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmtarifa" name="frmtarifa">
                <fieldset>
                    <div class="form-group">
                        <label for="tarifa">Tarifa:</label>
                        <input id="tarifa" name="tarifa" type="number" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto:</label>
                        <input id="monto" name="monto" type="text" class="form-control" required />
                    </div>
                </fieldset>
                <input type="submit" onclick="registrarTarifa();" class="btn btn-primary btn-block" value="Guardar" />
            </form>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-6">
            <?php include 'consultartarifa.php'; ?>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
