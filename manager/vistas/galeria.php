<?php
session_start();
require_once "../clases/Conexion.php";
$conexion = new Conectar();
$conexion = $conexion->Conexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../librerias/bootstrap5/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center text-center">
        <div class="col">
            <h2>GALERIA</h2>
            <hr>
        </div>
    </div>
    <!-- Nombre de los albumes -->
    <div class="row justify-content-center text-center">
        <div>
            <?php
            $sql = "SELECT id_categoria,
                            nombre
                    FROM t_categorias";
            $result = mysqli_query($conexion, $sql);

            $query = "SELECT * FROM t_archivos";
            $execute = mysqli_query($conexion, $query) or die (mysqli_error($conexion));


            $extensionesValidas = array('png', 'jpg', 'jpeg', 'mp3', 'mp4');

            while ($mostrar = mysqli_fetch_array($result) and $fila = mysqli_fetch_array($execute)) {
                $idCategoria = $mostrar['id_categoria'];
                ?>
                <!-- Nombre del album -->
                <p><?php echo $mostrar['nombre'] ?></p>
                <!-- Archivos del album -->
                <?php
                if (substr($fila['ruta'], -3) == 'mp4') {
                    ?>
                    <video src="<?php echo substr($fila['ruta'], 3) ?>" width="200" controls></video>
                    <?php
                } elseif (substr($fila['ruta'], -3) == 'jpeg') {
                    ?>
                    <img alt="" src="<?php echo substr($fila['ruta'], 3) ?>" width="120"
                    <?php
                } else {
                    ?>
                    <img alt="" src="<?php echo substr($fila['ruta'], 3) ?>" width="120"
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="../librerias/popper.min.js"></script>


</body>
</html>