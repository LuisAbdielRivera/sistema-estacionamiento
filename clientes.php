<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
  </head>
  <body>
    <h1>Clientes</h1>
    <form id="frmclientes" name="frmclientes">
      <fieldset>
        <label for="nombre">Nombre: 
        <input id="nombre" name="nombre" type="text" required />
      </label>
        <label for="direccion">Dirección:
          <textarea id="direccion" name="dirección" rows="3" cols="30" placeholder="Ingresa la dirección"></textarea>
        </label>
        <label for="telefono">Numero de Telefono: 
            <input id="telefono" name="telefono" type="number" required /></label>
        <label for="correo">Email: 
          <input id="correo" name="correo" type="email" required /></label>
        </fieldset>
      <input onclick="registrarCliente();" type="submit" value="Guardar"></input>
    </form>
    <div class="container">
      <?php
        include "consultarcliente.php";
      ?>
    </div>
  </body>
</html>