<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Vehiculos</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
  </head>
  <body>
    <h1>Vehiculos</h1>
    <form id="frmvehiculos" name="frmvehiculos">
      <fieldset>
        <label for="matricula">Matricula: <input id="matricula" name="matricula" type="text" required /></label>
        <label for="modelo">Modelo: <input id="modelo" name="modelo" type="number" required /></label>
        <label for="color">Color: <input id="color" name="color" type="color" required /></label>
        <label for="puertas">Puertas: <input id="puertas" name="puertas" type="number" required /></label>
        <label for="tipo">Tipo: <input id="tipo" name="tipo" type="text" required /></label>
        
        <label for="Id_cliente">Selecciona el Cliente
        <select id="Id_cliente" name="Id_cliente">
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

        </label>
        </fieldset>
      <input onclick="registrarVehiculo();" type="submit" value="Guardar" />
    </form>
    <div class="container">
      <?php
        include "consultarvehiculo.php";
      ?>
    </div>
  </body>
</html>