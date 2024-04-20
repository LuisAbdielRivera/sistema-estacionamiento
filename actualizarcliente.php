<h1>Actualizar Cliente</h1>
<?php
    include 'conexion.php';
    $Id_cliente = $_POST['Id_cliente'];
    $query="SELECT * FROM cliente WHERE Id_cliente='".$Id_cliente."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
?>
<div class="contenedorform" id="frm">
    <form id="frmclientes" name="frmclientes">
      <fieldset>
        <label for="nombre">Nombre: 
        <input id="nombre" name="nombre" type="text" value="<?php echo $result['nombre'];?>" required />
      </label>
        <label for="direccion">Dirección:
          <input id="direccion" name="direccion" rows="3" cols="30" value="<?php echo $result['direccion'];?>"/>
        </label>
        <label for="telefono">Numero de Telefono: 
            <input id="telefono" name="telefono" type="number" value="<?php echo $result['telefono'];?>" required /></label>
        <label for="correo">Email: 
          <input id="correo" name="correo" type="email" value="<?php echo $result['correo'];?>" required /></label>
        </fieldset>
      <input class="btn btn-warning btn-block" onclick="actualizarCliente(<?php echo $Id_cliente;?>);" type="submit" value="Actualizar"></input>
      <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar"></input>      
    </form>
    </div>
    <div>
      <?php
        }
      ?>
    </div>