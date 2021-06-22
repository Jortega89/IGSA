<?php
require_once "../controladores/cotizacion.controlador.php";

$continente = $_POST['continente'];
$subFamilia = ctrcotiza::ctrSubFamilia($continente);

$cadena="<label>SELECT 2 (paises)</label> 
			<select id='listaservicios' name='listaservicios'>";

while ($ver = mysqli_fetch_row($subFamilia)) {
    $cadena = $cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
}

echo  $cadena."</select>";

