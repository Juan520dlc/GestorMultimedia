<!DOCTYPE html>
<html>
<head>
    <title>Proyecto Majadas</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="../librerias/datatable/dataTables.bootstrap4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="background-color: #e9ecef">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="inicio.php">
            <img src="../img/logo_prueba.jpg" alt="..." height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php">
                        Inicio<span class="fa-solid fa-house"style="margin-left: 5px"></span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <!-- Categorias -->
                <li class="nav-item">
                    <a class="nav-link" href="categorias.php">
                        Categorias<span class="fa-solid fa-folder-tree" style="margin-left: 5px"></span>
                    </a>
                <!-- Gestor de Archivos -->
                <li class="nav-item">
                    <a class="nav-link" href="gestor.php">
                        Archivos<span class="fa-solid fa-folder-open" style="margin-left: 5px"></span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="../procesos/usuario/salir.php" style="color: red">
                        Salir <span class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 5px"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>