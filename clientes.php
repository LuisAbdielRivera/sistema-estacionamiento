<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Clientes</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="frmclientes" name="frmclientes">
                <fieldset>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <textarea id="direccion" name="dirección" rows="3" class="form-control" placeholder="Ingresa la dirección"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Numero de Telefono:</label>
                            <input id="telefono" name="telefono" type="number" class="form-control" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="correo">Email:</label>
                            <input id="correo" name="correo" type="email" class="form-control" required />
                        </div>
                    </div>
                </fieldset>
                <button type="button" onclick="registrarCliente();" class="btn btn-primary d-block mx-auto">Guardar</button>
            </form>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <?php include "./consulta-datos/consultarcliente.php"; ?>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
