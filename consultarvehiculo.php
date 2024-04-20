<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Puertas</th>
                <th scope="col">Tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query="SELECT Id_vehiculo, matricula, modelo, color, puertas, tipo FROM vehiculo";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['matricula']."</td>
                    <td>".$result['modelo']."</td>
                    <td>".$result['color']."</td>
                    <td>".$result['puertas']."</td>
                    <td>".$result['tipo']."</td>
                    <td><a href='#' class='text-warning' onclick='editarVehiculo(".$result['Id_vehiculo'].");'>Editar</a></td>
                    <td><a href='#' class='text-danger' onclick='eliminarVehiculo(".$result['Id_vehiculo'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>