<?php
    include 'conexion.php';

    $query="SELECT * FROM sensorhumedad ORDER BY Id_humedad DESC LIMIT 1";
    $data=$conexion->query($query);
    $dataTemp=$data->fetch_array();
?>

<div class="d-flex justify-content-end mb-3">
    <div>
        <h4>
            <?php echo $dataTemp['temperatura'];?>º <img src="./imagenes/icons8-temperatura-96.png" width="25" alt="icon-humedad"> <?php echo $dataTemp['humedad'];?>% <img src="./imagenes/icons8-humedad-100.png" width="25" alt="icon-humedad"> 

            <?php
                $query="SELECT * FROM fotoresistencia ORDER BY id DESC LIMIT 1";
                $dataLigth=$conexion->query($query);
                $dataVerify=$dataLigth->fetch_array();
                echo $dataVerify['estatus'] ? "<img src='imagenes/light.png' width='25'>" : "<img src='imagenes/low.png' width='25'>" ;
            ?>
        </h4>
    </div>
</div>


<div class="row row-cols-1 row-cols-md-5 g-4">
    <?php
        $query="SELECT Id_cajon, numero, status, ocupado FROM cajon ORDER BY numero";
        $ejecutar=$conexion->query($query);
        while ($result=$ejecutar->fetch_array()) {
            echo "<div class='col'>
                    <div class='card m-1 shadow p-3 mb-5 bg-body' style='width: 14rem;'>
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
                            echo "<p class='card-text'>Matricula: ".$result2['matricula']."</p>";
                            echo "<p class='card-text'>Fecha: ".$result2['fechaIngreso']."</p>";
                            echo "<p class='card-text'>Hora: ".$result2['horaIngreso']."</p>";
                            echo "<p class='card-text'>Tarifa: ".$result2['tarifa']." </p>";
                            echo "<p class='card-text'>Encargado: ".$result2['nombre']." </p>";
                        }
                        echo "<p class='card-text'>Cajon ocupado</p>";
                        echo "<div class='row'><div class='col-md-6'><a href='#' class='btn btn-warning text-white' onclick='cerrarCajon(".$result['Id_cajon'].")'>Salir</a></div>";
                        if($result['ocupado']==0){
                            echo "<div class='col-md-4'><img src='./imagenes/boton-v.png' width='50'/></div></div>";
                        }else{
                            echo "<div class='col-md-4'><img src='./imagenes/boton-r.png' width='50'/></div></div>";
                        }
                    }else{
                        echo "<p class='card-text'>No existe un vehiculo</p>";
                        echo "<div class='row'><div class='col-md-6'><a href='#' class='btn btn-info text-white' onclick='abrirModal(".$result['Id_cajon'].")'>Ocupar</a></div>";
                        if($result['ocupado']==0){
                            echo "<div class='col-md-4'><img src='./imagenes/boton-v.png' width='50'/></div></div>";
                        }else{
                            echo "<div class='col-md-4'><img src='./imagenes/boton-r.png' width='50'/></div></div>";
                        }
                    }
                    echo "
                        </div>
                    </div>
                </div>";
        }
    ?>
</div>

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
                        </label>
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
                        </label>
                    </div>
                    <input onclick="registrarRegistro();" type="submit" value="Guardar" />
                </form>
            </div>
        </div>
    </div>
</div>
