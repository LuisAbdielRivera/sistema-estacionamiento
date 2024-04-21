<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Encargados</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Encargados</h1>
    <form id="frmencargados" name="frmencargados">
      <fieldset>
        <label for="nombre">Nombre: <input id="nombre" name="nombre" type="text" required /></label>
        <label for="direccion">Dirección:
          <textarea id="direccion" name="direccion" rows="3" cols="30" placeholder="Ingresa la dirección"></textarea>
        </label>
        <label for="telefono">Numero de Telefono: 
            <input id="telefono" name="telefono" type="number" required /></label>
        <label for="correo">Email: <input id="correo" name="correo" type="email" required /></label>
        </fieldset>
        <fieldset>
        <label for="usuario">Usuario: <input id="usuario" name="usuario" type="text" required /></label>
        <label for="contrasena">Contraseña: <input id="contrasena" name="contrasena" type="password" required /></label>
        </fieldset>
      <input onclick="registrarEncargado();" type="submit" value="Guardar" />
    </form>
    <?php
      include '../consulta-datos/consultarencargado.php'
    ?>
  </body>
</html>