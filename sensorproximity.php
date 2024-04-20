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
            <label for="distancia">Distancia: <input id="distancia" name="distancia" type="number" required /></label>
            <label for="fecha">Fecha: <input id="fecha" name="fecha" type="date" required /></label>
            <label for="hora">Hora: <input id="hora" name="hora" type="time" required /></label>
            <label for="status">Estatus:
            <select id="status" name="status">
                <option value="">-- Selecciona el Estatus --</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </fieldset>
        <input onclick="registrarProximity();" type="submit" value="Guardar" />
    </form>
  </body>
</html>