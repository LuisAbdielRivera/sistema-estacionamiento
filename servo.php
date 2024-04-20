<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Servo</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
  </head>
  <body>
    <h1>Servo</h1>
    <form id="frmservo" name="frmservo">
        <fieldset>
            <label for="descripcion">Descripción: <input id="descripcion" name="descripcion" type="text" required /></label>
            <label for="grados">Grados: <input id="grados" name="grados" type="number" required /></label>
            <label for="estatus">Estatus:
            <select id="estatus" name="estatus">
                <option value="">-- Selecciona el Estatus --</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </fieldset>
        <input onclick="registrarServo();" type="submit" value="Guardar" />
    </form>
    <?php
      include 'consultarservo.php';
    ?>
  </body>
</html>