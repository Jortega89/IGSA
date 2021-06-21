<?php

class ctrcotiza{

    static public function ctrCrearCotizacion($idCliente, $descripcion, $fecha){

        $respuesta = mdlcotiza::mdlCrearCotizacion($idCliente, $descripcion, $fecha);

        return $respuesta;


    }

    static public function ctrMostrarCotizacion(){

        $respuesta = mdlcotiza::mdlMostrarcoti();

        return $respuesta;


    }

    static public function ctrDatosCotizacion($id){

            $respuesta = mdlcotiza::mdlDatosCotizacion($id);

            return $respuesta;


        }
    static public function ctrFamilia(){

            $respuesta = mdlcotiza::mdlFamilia();

            return $respuesta;


        }


}