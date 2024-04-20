<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Servos</th>
                <th scope="col">Grados</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT Id_servo, descripcion, grados FROM servo";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['descripcion']."</td>
                    <td>".$result['grados']."°</td>
                    <td><a href='#' onclick='editarServo(".$result['Id_servo'].");'>Editar</a></td>
                    <td><a href='#' onclick='eliminarServo(".$result['Id_servo'].");'>Eliminar</a></td>
                    </tr>";
                };
            ?>
        </tbody>
    </table>
</div>