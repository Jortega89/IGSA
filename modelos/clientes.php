<?php


class Clientes
{
    public static function nuevo($nombre)
    {
        $Conex = Conexion::conectar();
        $sentencia = $Conex->prepare("insert into clientes(nombre, idUsuario) VALUES (?, ?);");
        return $sentencia->execute();
    }

    public static function actualizar($id, $nombre)
    {
        $Conex = Conexion::conectar();
        $sentencia = $Conex->prepare("update clientes set nombre = ? where id = ? and idUsuario = ?;");
        return $sentencia->execute();
    }

    public static function todos()
    {
        $Conex = Conexion::conectar();
        $sentencia = $Conex->prepare("select id, nombre from clientes where idUsuario = ?;");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public static function porId($id)
    {
        $Conex = Conexion::conectar();
        $sentencia = $Conex->prepare("select id, nombre from clientes where id = ? and idUsuario = ?;");
        $sentencia->execute();
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public static function eliminar($id)
    {
        $Conex = Conexion::conectar();
        $sentencia = $Conex->prepare("delete from clientes where id = ? and idUsuario = ?;");
        return $sentencia->execute();
    }
}
