<?php

require_once "conexion.php";

class mdlcotiza{

    /*Ingresa las cotizaciones realizadas*/
    static public function mdlCrearCotizacion($idCliente, $descripcion, $fecha){

        $stmt = Conexion::conectar()->prepare("INSERT INTO `cotizaciones`(`idCliente`, `descripcion`, `fecha`) VALUES (:idCliente,:descripcion,:fecha)");

        $stmt->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
        $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt->close();

        $tmt = null;


    }

    /*Muestra las cotizaciones*/
    static public function mdlMostrarcoti(){


        $stmt = Conexion::conectar()->prepare("SELECT cotizaciones.id, clientes.nombre, cotizaciones.descripcion, cotizaciones.fecha FROM clientes INNER JOIN cotizaciones ON cotizaciones.idCliente = clientes.id");
        $stmt -> execute();

        return $stmt -> fetchAll();

    }

    static public function mdlDatosCotizacion($id){


        $stmt = Conexion::conectar()->prepare("SELECT cotizaciones.id, clientes.nombre, cotizaciones.descripcion, cotizaciones.fecha, cotizaciones.idCliente FROM clientes INNER JOIN cotizaciones ON cotizaciones.idCliente = clientes.id WHERE cotizaciones.id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt -> execute();

        return $stmt -> fetch();

    }

    static public function mdlFamilia(){


        $stmt = Conexion::conectar()->prepare("SELECT `id`, `categoria` FROM `categorias`");
        $stmt -> execute();

        return $stmt -> fetchAll();

    }
}
