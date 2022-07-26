<?php

class Conectar
{
    public function conexion()
    {
        $servidor = "216.246.46.178";
        $usuario = "dosingenierias";
        $password = "Pagina2019";
        $base = "dosingenierias_proyectomajadas";

        $conexion = mysqli_connect($servidor, $usuario, $password, $base);

        $conexion->set_charset('utf8mb4');
        return $conexion;

    }
}