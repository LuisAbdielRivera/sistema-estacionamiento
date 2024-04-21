<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Num. Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../conexion.php';
                $query="SELECT Id_empleado, nombre, direccion, telefono, correo FROM empleados";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['nombre']."</td>
                    <td>".$result['direccion']."</td>
                    <td>".$result['telefono']."</td>
                    <td>".$result['correo']."</td>
                    <td><a href='#' class='text-warning' onclick='editarEncargado(".$result['Id_empleado'].");'>Editar</a></td>
                    <td><a href='#' class='text-danger' onclick='eliminarEncargado(".$result['Id_empleado'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>