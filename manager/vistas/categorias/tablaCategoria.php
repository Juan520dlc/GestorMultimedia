<?php
session_start();
//Llamado a la conexion
require_once "../../clases/Conexion.php";
$idUsuario = $_SESSION['idUsuario'];
$conexion = new Conectar();
$conexion = $conexion->conexion();

?>

<div class="table-responsive">
    <table class="table table-hover table-dark" id="tablaCategoriasDataTable">
        <thead>
        <tr>
            <td style="text-align: center">Nombre</td>
            <td style="text-align: center">Fecha</td>
            <td style="text-align: center">Editar</td>
            <td style="text-align: center">Eliminar</td>
        </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT id_categoria,
                            nombre,
                            fechaInsert
                    FROM t_categorias
                    WHERE id_usuario = '$idUsuario'";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
            $idCategoria = $mostrar['id_categoria'];
            ?>

            <tr style="text-align: center">
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['fechaInsert'] ?></td>
                <!-- Boton de "Editar -->
                <td>
                <span class="btn btn-warning btn-sm" onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')"
                      data-toggle="modal" data-target="#modalActualizarCategoria">
                    <span class="fas fa-edit"></span>
                </span>
                </td>
                <!-- Boton de "Eliminar" -->
                <td>
                <span class="btn btn-danger btn-sm" onclick="eliminarCategoria('<?php echo $idCategoria ?>')">
                    <span class="fas fa-trash-alt"></span>
                </span>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tablaCategoriasDataTable').DataTable();
    });
</script>