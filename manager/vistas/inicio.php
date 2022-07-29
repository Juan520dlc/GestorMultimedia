<?php

session_start();

if (isset($_SESSION['usuario'])) {
    include "header.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>

    <?php
    include "footer.php";
} else {
    header("location:../index.php");
}

?>
<link rel="stylesheet" type="text/css" href="../css/inicio.css">

<div>
    <h1>Gestor de Archivos del Proyecto Majadas</h1>
    <p>Aplicacion encargada del manejo de archivos del proyecto.</p>
    <hr>
    <div style="text-align: center">
        <img src="../img/logo_prueba.jpg" alt="" height="200">
    </div>
    <div style="text-align: center">
        <span type="button" class="btn btn-primary">Ver Galería
            <i class="fa-solid fa-arrow-right"></i>
        </span>
    </div>
</div>
