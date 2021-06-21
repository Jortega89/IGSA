<?php
require_once "controladores/cotizacion.controlador.php";
if (
    empty($_POST["idCliente"])
    ||
    empty($_POST["descripcion"])
    ||
    empty($_POST["fecha"])
) {
    exit;
}
$idCliente = $_POST["idCliente"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];

$respuesta = ctrcotiza::ctrCrearCotizacion($idCliente, $descripcion, $fecha);
//Cotizaciones::nueva($_POST["idCliente"], $_POST["descripcion"], $_POST["fecha"]);
 if($respuesta == "ok"){

     $nuevaURL = "cotizaciones";
     return header('Location: '.$nuevaURL);

 }
 else{
        echo "<script>
            swal({
                title: 'Error al crear cotización ',
                text: 'Falta un dato importante',
                type: 'error',
                confirmButtonText: '¡Cerrar!'
		    });
		    </script>";
 }