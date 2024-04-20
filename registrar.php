<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
  </head>
  <body>
    <h1>Registro</h1>
    <form id="frmregistrar" name="frmregistrar">
      <fieldset>

        <label for="Id_vehiculo">Vehiculo
        <select id="Id_vehiculo" name="Id_vehiculo">
            <option value="">-- Selecciona un Vehiculo --</option>
            <?php
            include 'conexion.php';
            $query="SELECT Id_vehiculo, matricula, tipo FROM vehiculo";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
              echo "<option value='".$result['Id_vehiculo']."'>".$result['matricula']." - ".$result['tipo']."</option>";
            }
            ?>
        </select>
        
        <label for="Id_cajon">Selecciona el Cajon
        <select id="Id_cajon" name="Id_cajon">
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

        <label for="Id_tarifa">Tarifa
        <select id="Id_tarifa" name="Id_tarifa">
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

      </fieldset>
      <input onclick="registrarRegistro();" type="submit" value="Guardar" />
    </form>
  </body>
</html>