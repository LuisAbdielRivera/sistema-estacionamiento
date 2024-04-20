<?php
    include 'conexion.php';

    $query="SELECT * FROM sensorhumedad ORDER BY Id_humedad DESC LIMIT 1";
    $data=$conexion->query($query);
    $dataTemp=$data->fetch_array();
?>

<h4>Bienvenido la temperatura de hoy es de: <b>
    <?php echo $dataTemp['temperatura'];?>º </b> y la humedad actual esta en: <b><?php echo $dataTemp['humedad'];?>% 

<?php
    $query="SELECT * FROM fotoresistencia ORDER BY id DESC LIMIT 1";
    $dataLigth=$conexion->query($query);
    $dataVerify=$dataLigth->fetch_array();
    echo $dataVerify['estatus'] ? "<img src='imagenes/Encendido.png' style='height:40px'>" : "<img src='imagenes/Apagado.png' style='height:40px'>" ;
?>

</h4>
    
<?php
$query="SELECT Id_cajon, numero, status, ocupado FROM cajon ORDER BY numero";
$ejecutar=$conexion->query($query);
    echo "<div class='row'>";
    while ($result=$ejecutar->fetch_array()){
        echo "<div class='col-sm-3'>
                <div class='card' style='width:14rem;'>
                    <img src='./imagenes/logo.jpg' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>Cajon ".$result['numero']."</h5>";
                if($result['status']==1){
                    $query2 = "SELECT * FROM registro INNER JOIN vehiculo ON vehiculo.Id_vehiculo=
                    registro.Id_vehiculo INNER JOIN cajon ON cajon.Id_cajon=registro.Id_cajon INNER JOIN 
                    tarifa ON tarifa.Id_tarifa = registro.Id_tarifa INNER JOIN empleados ON empleados.Id_empleado=
                    registro.Id_empleado WHERE registro.Id_cajon= '".$result['Id_cajon']."' and fechaSalida Is NULL";
                    $ejecutar2=$conexion->query($query2);
                    while($result2=$ejecutar2->fetch_array()){
                        echo "<p>Matricula: ".$result2['matricula']."</p>";
                        echo "<p>Fecha: ".$result2['fechaIngreso']."</p>";
                        echo "<p>Hora: ".$result2['horaIngreso']."</p>";
                        echo "<p>Tarifa: ".$result2['tarifa']." </p>";
                        echo "<p>Encargado: ".$result2['nombre']." </p>";
                    }
                    echo "<p class='card-text'>Cajon ocupado</p>";
                    echo "<div class='row'><div class='col-md-6'><a href='#' class='btn btn-warning text-white' onclick='cerrarCajon(".$result['Id_cajon'].")'>Salir</a></div>";
                    if($result['ocupado']==0){
                        echo "<div class='col-md-4'><img src='./imagenes/boton-v.jpg' width='50'/></div></div>";
                    }else{
                        echo "<div class='col-md-4'><img src='./imagenes/boton-r.jpg' width='50'/></div></div>";
                    }
                }else{
                    echo "<p class='card-text'>No existe un vehiculo</p>";
                    echo "<div class='row'><div class='col-md-6'><a href='#' class='btn btn-info text-white' onclick='abrirModal(".$result['Id_cajon'].")'>Ocupar</a></div>";
                    if($result['ocupado']==0){
                        echo "<div class='col-md-4'><img src='./imagenes/boton-v.jpg' width='50'/></div></div>";
                    }else{
                        echo "<div class='col-md-4'><img src='./imagenes/boton-r.jpg' width='50'/></div></div>";
                    }
                }
                echo "
                </div>
                    </div>
                </div>
                ";
            }
?>

<div class="modal text-dark" id="modalPromociones">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Registrar uso de estacionamiento</h4>
            <button type="button" class="close" data-dismiss="modal" onclick="cerrarModal();">x</button>
        
        </div>
        <div class="modal-body">
        <form id="frmregistrar" name="frmregistrar">

        <div class="form-outline mb-4">
        <label class="form-label" for="Id_vehiculo">Vehiculo
        <select id="Id_vehiculo" name="Id_vehiculo" class="w-50">
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
        </div>

        <div class="form-outline mb-4">
            <label for="Id_cajon" class="form-label">Cajon:</label>
            <input type="text" name="Id_cajon" id="Id_cajon" value="" class="form-control w-50" readonly="readonly">
        </div>

        <div class="form-outline mb-4">
        <label class="form-label" for="Id_tarifa">Tarifa
        <select id="Id_tarifa" name="Id_tarifa" class="w-50">
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
        </div>
      </fieldset>
      <input onclick="registrarRegistro();" type="submit" value="Guardar" />
    </form>
        </div>
        </div>
    </div>
</div>