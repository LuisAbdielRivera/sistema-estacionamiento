<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Tarifas</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
  </head>
  <body>
    <h1>Tarifas</h1>
    <form id="frmtarifa" name="frmtarifa">
        <fieldset>
            <label for="tarifa">Tarifa: <input id="tarifa" name="tarifa" type="number" required /></label>
            <label for="monto">Monto: <input id="monto" name="monto" type="text" required /></label>
        </fieldset>
        <input onclick="registrarTarifa();" type="submit" value="Guardar" />
    </form>
    <?php
      include 'consultartarifa.php';
    ?>
  </body>
</html>