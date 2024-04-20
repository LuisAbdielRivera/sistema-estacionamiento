<h1>Actualizar Cliente</h1>
<?php
    include 'conexion.php';
    $Id_tarifa = $_POST['Id_tarifa'];
    $query="SELECT * FROM tarifa WHERE Id_tarifa='".$Id_tarifa."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
?>

<div class="contenedorform" id="frm">
<form id="frmtarifa" name="frmtarifa">
        <fieldset>
            <label for="tarifa">Tarifa: <input id="tarifa" name="tarifa" type="number" value="<?php echo $result['tarifa'];?>" required /></label>
            <label for="monto">Monto: <input id="monto" name="monto" type="text" value="<?php echo $result['monto'];?>" required /></label>
        </fieldset>
    <input class="btn btn-warning btn-block" onclick="actualizarTarifa(<?php echo $Id_tarifa;?>);" type="submit" value="Actualizar"></input>
    <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar"></input>
    </form>
</div>

<div>
      <?php
        }
      ?>
</div>