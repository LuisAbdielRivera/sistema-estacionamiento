<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Tarifa</th>
                <th scope="col">Monto</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../conexion.php';
                $query="SELECT Id_tarifa, tarifa, monto FROM tarifa";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['tarifa']."</td>
                    <td>".$result['monto']."</td>
                    <td><a href='#' class='text-warning' onclick='editarTarifa(".$result['Id_tarifa'].");'>Editar</a></td>
                    <td><a href='#' class='text-danger' onclick='eliminarTarifa(".$result['Id_tarifa'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>