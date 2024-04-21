<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Reportes</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="#" action='#'>
                <fieldset>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="reporte">Reporte:</label>
                        <textarea id="reporte" name="reporte" class="form-control" rows="3" placeholder="Ingrese su Reporte"></textarea>
                    </div>
                </fieldset>
                <input type="submit" class="btn btn-primary btn-block" value="Guardar" />
            </form>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
