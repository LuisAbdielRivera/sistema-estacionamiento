<h1>Actualizar Vehiculo</h1>
<?php
    include 'conexion.php';
    $Id_vehiculo = $_POST['Id_vehiculo'];
    $query="SELECT * FROM vehiculo WHERE Id_vehiculo='".$Id_vehiculo."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
?>
<div class="contenedorform" id="frm">
<form id="frmvehiculos" name="frmvehiculos">
    <fieldset>
        <label for="matricula">Matricula: <input id="matricula" name="matricula" type="text" value="<?php echo $result['matricula'];?>" required /></label>
        <label for="modelo">Modelo: <input id="modelo" name="modelo" value="<?php echo $result['modelo'];?>" type="number" required /></label>
        <label for="color">Color: <input id="color" name="color" type="color" value="<?php echo $result['color'];?>" required /></label>
        <label for="puertas">Puertas: <input id="puertas" name="puertas" type="number" value="<?php echo $result['puertas'];?>" required /></label>
        <label for="tipo">Tipo: <input id="tipo" name="tipo" type="text" value="<?php echo $result['tipo'];?>" required /></label>
        
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
      <input class="btn btn-warning btn-block" onclick="actualizarVehiculo(<?php echo $Id_vehiculo;?>);" type="submit" value="Actualizar"></input>
      <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar"></input>      
    </form>
    </div>
    <div>
      <?php
        }
      ?>
    </div>