<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT Id_cliente, nombre, direccion, telefono, correo FROM cliente";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['nombre']."</td>
                    <td>".$result['direccion']."</td>
                    <td>".$result['telefono']."</td>
                    <td>".$result['correo']."</td>
                    <td><a href='#' class='text-warning' onclick='editarCliente(".$result['Id_cliente'].");'>Editar</a></td>
                    <td><a href='#' class='text-danger' onclick='eliminarCliente(".$result['Id_cliente'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>