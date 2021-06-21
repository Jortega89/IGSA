<?php
require_once "controladores/cotizacion.controlador.php";
/*if (
    empty($_POST["idCliente"])
    ||
    empty($_POST["descripcion"])
    ||
    empty($_POST["fecha"])
) {
    exit;
}*/
$idCliente = $_POST["idCliente"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];

echo $idCliente." ".$descripcion." ".$fecha;

$respuesta = ctrcotiza::ctrCrearCotizacion($idCliente, $descripcion, $fecha);
//Cotizaciones::nueva($_POST["idCliente"], $_POST["descripcion"], $_POST["fecha"]);
$ubica = "https://solucionesorba.com/colmena/cotizaciones";
header('Location: '.$ubica);
echo $respuesta;
if($respuesta == "ok"){

    echo "<script>window.location.replace('https://solucionesorba.com/colmena/cotizaciones');</script>";

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