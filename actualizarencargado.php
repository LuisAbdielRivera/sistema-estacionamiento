<h1>Actualizar Encargado</h1>
<?php
    include 'conexion.php';
    $Id_empleado = $_POST['Id_empleado'];
    $query="SELECT * FROM empleados WHERE Id_empleado='".$Id_empleado."'";
    $ejecutar=$conexion->query($query);
    while ($result = $ejecutar->fetch_array()) {
?>

<div class="contenedorform" id="frm">
<form id="frmencargados" name="frmencargados">
      <fieldset>
        <label for="nombre">Nombre: <input id="nombre" name="nombre" type="text" value="<?php echo $result['nombre'];?>" required /></label>
        <label for="direccion">Dirección:
          <input id="direccion" name="direccion" rows="3" cols="30" value="<?php echo $result['direccion'];?>"/>
        </label>
        <label for="telefono">Numero de Telefono: 
            <input id="telefono" name="telefono" type="number" value="<?php echo $result['telefono'];?>" required /></label>
        <label for="correo">Email: <input id="correo" name="correo" type="email" value="<?php echo $result['correo'];?>" required /></label>
        </fieldset>
        <fieldset>
        <label for="usuario">Usuario: <input id="usuario" name="usuario" type="text" value="<?php echo $result['usuario'];?>" required /></label>
        <label for="contrasena">Contraseña: <input id="contrasena" name="contrasena" type="password" value="<?php echo $result['contrasena'];?>" required /></label>
        </fieldset>
    <input class="btn btn-warning btn-block" onclick="actualizarEncargado(<?php echo $Id_empleado;?>);" type="submit" value="Actualizar"></input>
    <input class="btn btn-danger btn-block" onclick="cancelar();" type="submit" value="Cancelar"></input>
    </form>

</div>

<div>
      <?php
        }
      ?>
</div>