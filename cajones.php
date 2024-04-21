<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cajones</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Cajones</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmcajones" name="frmcajones">
                <div class="form-group">
                    <label for="numero">Numero de Cajones:</label>
                    <input id="numero" name="numero" type="number" class="form-control" required />
                </div>
                <a type="button" onclick="registrarCajon();" class="btn btn-primary d-block mx-auto">Guardar</a>
            </form>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-6">
            <?php include "./consulta-datos/consultarcajones.php"; ?>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
