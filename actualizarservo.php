<h1>Actualizar Vehiculo</h1>
<?php
    include 'conexion.php';
    $Id_servo = $_POST['Id_servo'];
    $query="SELECT * FROM servo WHERE Id_servo ='".$Id_servo."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
?>
<div class="contenedorform" id="frm">
<form id="frmservo" name="frmservo">
        <fieldset>
        <label for="descripcion">Descripción: <input id="descripcion" name="descripcion" type="text" value="<?php echo $result['descripcion'];?>" required /></label>
        <label for="grados">Grados: <input id="grados" name="grados" value="<?php echo $result['grados'];?>" type="number" required /></label>

        <label for="estatus">Estatus:
            <select id="estatus" name="estatus">
                <option value="">-- Selecciona el Estatus --</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </label>
    </fieldset>
      <input class="btn btn-warning btn-block" onclick="actualizarServo(<?php echo $Id_servo;?>);" type="submit" value="Actualizar"></input>
      <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar"></input>      
    </form>
    </div>
    <div>
      <?php
        }
      ?>
    </div>