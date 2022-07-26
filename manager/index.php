<!DOCTYPE html>
<hmtl lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Inicio de Sesion</title>

        <!-- Bootstrap CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
              id="bootstrap-css">
        <!-- Bootstrap JS SCRIPT -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Hoja de estilos -->
        <link href="css/login.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/logo_prueba.jpg" id="icon" alt="User Icon"/>
                <h1>Proyecto Majadas</h1>
            </div>

            <!-- Login Form -->
            <form method="post" id="frmLogin" onsubmit="return logear()">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required>
                <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
            </form>

            <!-- Rehistrarse -->
            <div id="formFooter">
                <a class="underlineHover" href="registro.php">Registrar</a>
            </div>
            <div id="formFooter">
                <a class="underlineHover" href="../index.html">Volver a la página principal</a>
            </div>

        </div>
    </div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="librerias/jquery-3.6.0.min.js"></script>
    <!-- Script de SweetAlert -->
    <script src="librerias/sweetalert.min.js"></script>
    <!-- Scrip del Login de usuarios -->
    <script type="text/javascript">
        function logear(){
            $.ajax({
                type: "POST",
                data: $('#frmLogin').serialize(),
                url: "procesos/usuario/login/login.php",
                success:function (respuesta) {
                    respuesta = respuesta.trim();
                    if(respuesta == 1) {
                        window.location = "vistas/inicio.php";
                    } else {
                        swal(":(", "Fallo al iniciar sesion!", "error")
                    }
                }
            });

            return false;
        }
    </script>
    </body>
</hmtl>