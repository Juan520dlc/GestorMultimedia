<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registro de Usuario</title>

    <!-- JQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <!-- Bootstrap -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;">Registro de Usuario</h1>
    <hr>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()">
                <label>Nombre personal</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required="">
                <label>Email o correo</label>
                <input type="email" name="correo" id="correo" class="form-control" required="">
                <label>Nombre de usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required="">
                <label>Password o contraseña</label>
                <input type="password" name="password" id="password" class="form-control"
                       required="" autocomplete="">
                <br>
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                    <div class="col-sm-6 text-center">
                        <a href="../index.html" class="btn btn-success">Volver</a>
                        <a href="index.php" class="btn btn-success">Login</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<!-- JQuery -->
<script src="librerias/jquery-3.6.0.min.js"></script>
<!-- Script de SweetAlert -->
<script src="librerias/sweetalert.min.js"></script>
<!-- Script para comprobar si se crea un nuevo usuario de forma exitosa, se esta repitiendo el usuario o existe un fallo
al registrar un nuevo usuario -->
<script type="text/javascript">
    function agregarUsuarioNuevo() {
        $.ajax({
            method: "POST",
            data: $('#frmRegistro').serialize(),
            url: "procesos/usuario/registro/agregarUsuario.php",
            success: function (respuesta) {
                respuesta = respuesta.trim();

                if (respuesta == 1) {
                    $('#frmRegistro')[0].reset();
                    swal(":D", "Agregado con exito!", "success");
                } else if (respuesta == 2) {
                    swal("Este nombre de usuario ya existe, por favor escribe otro! :/");
                } else {
                    swal(":(", "Fallo al agregar!", "error");
                }
            }
        });

        return false;
    }
</script>
</body>
</html>