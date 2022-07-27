<?php
require_once "../manager/clases/Categorias.php";
$Categorias = new Categorias();

echo json_encode($Categorias->obtenerCategoria($_POST['idCategoria']));

$conexion = new Conectar();
$conexion = $conexion->conexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../manager/librerias/bootstrap5/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center text-center">
        <div class="col">
            <h2>GALERIA</h2>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <?php
        $sql = "SELECT id_categoria,
                            nombre
                    FROM t_categorias";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
            $idCategoria = $mostrar['id_categoria'];
            ?>
            <div>
                <p><?php echo $mostrar['nombre'] ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!-- SCRIPTS -->
<script src="../manager/librerias/jquery-3.6.0.min.js"></script>
<script src="../manager/librerias/bootstrap5/bootstrap.bundle.min.js"></script>
<script src="../manager/librerias/popper.min.js"></script>
</body>
</html>