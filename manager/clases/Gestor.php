<?php

require_once "Conexion.php";

class Gestor extends Conectar
{
    public function agregaRegistroArchivo($datos)
    {
        $conexion = Conectar::conexion();
        $sql = "INSERT INTO t_archivos (id_usuario,
                                        id_categoria,
                                        nombre,
                                        tipo,
                                        ruta) 
                            VALUES (?, ?, ?, ?, ?)";
        $query = $conexion->prepare($sql);
        $query->bind_param("iisss", $datos['idUsuario'],
            $datos['idCategoria'],
            $datos['nombreArchivo'],
            $datos['tipo'],
            $datos['ruta']);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
    }

    public function obtenNombreArchivo($idArchivo)
    {
        $conexion = Conectar::conexion();
        $sql = "SELECT nombre
                FROM t_archivos
                WHERE id_archivos = '$idArchivo'";
        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_array($result)['nombre'];
    }

    public function eliminarRegistroArchivo($idArchivo)
    {
        $conexion = Conectar::conexion();
        $sql = "DELETE FROM t_archivos WHERE id_archivos = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $idArchivo);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
    }

    public function obtenerRutaArchivo($idArchivo)
    {
        $conexion = Conectar::conexion();

        $sql = "SELECT nombre, tipo 
                FROM t_archivos 
                WHERE id_archivos = '$idArchivo'";
        $result = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($result);
        $nombreArchivo = $datos['nombre'];
        $extension = $datos['tipo'];

        return self::tipoArchivo($nombreArchivo, $extension);
    }

    public function tipoArchivo($nombre, $extension)
    {
        $idUsuario = $_SESSION['idUsuario'];

        $ruta = '../archivos/' . $idUsuario . "/" . $nombre;

        switch ($extension) {
            case 'png' :
                return '<img src="' . $ruta . '" width="80%">';
            case 'jpg' :
                return '<img src="' . $ruta . '" width="80%">';
            case 'jpeg':
                return '<img src="' . $ruta . '" width="80%">';
            case 'mp3':
                return '<audio src="'.$ruta.'" controls></video>';
            case 'mp4':
                return '<video src="'.$ruta.'" controls width="100%" height="600px"></video>';
            case 'MOV':
                return '<video src="' . $ruta . '" controls width="100%" height="600px"></video>';
        }
    }
}