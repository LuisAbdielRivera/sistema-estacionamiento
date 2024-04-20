<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Cajones</title>
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>
  </head>
  <body>
    <h1>Cajones</h1>
    <form id="frmcajones" name="frmcajones">
        <label for="numero">Numero de Cajones: 
            <input id="numero" name="numero" type="numero" required /></label>
      <input onclick="registrarCajon();" type="submit" value="Guardar" />
    </form>
    <div class="container">
      <?php
        include "consultarcajones.php";
      ?>
    </div>
  </body>
</html>