<?php
require_once "../manager/clases/Conexion.php";
$c = new Conectar();
$conexion = $c->conexion();
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
        $sql = "SELECT * FROM t_archivos";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
            $idCategoria = $mostrar['id_categoria'];
            ?>
            <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                <div class="card">
                    <a href="" data-toggle="modal"
                       data-target="<?php echo '#' . $result['id_categoria'] ?>"><img
                                src="<?php echo $result['ruta'] ?>"
                                alt="" class="card-img-top"></a>
                    <div class="modal fade" id="imagen" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center"
                             role="document">
                            <img src="<?php echo $result['ruta'] ?>" alt="" class="card-img-top">
                        </div>
                    </div>
                </div>
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