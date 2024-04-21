<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Cajones</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../conexion.php';
                $query="SELECT Id_cajon, numero FROM cajon";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['numero']."</td>
                    <td><a href='#' class='text-danger' onclick='eliminarCajon(".$result['Id_cajon'].");'>Eliminar</a></td>
                    </tr>";
                };
            ?>
        </tbody>
    </table>
</div>