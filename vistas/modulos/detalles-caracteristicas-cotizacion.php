<?php
$host= $_SERVER["HTTP_HOST"];
$urlss= $_SERVER["REQUEST_URI"];
$usl= 'https://' . $host . $urlss;
$components = parse_url($usl);
parse_str($components['query'], $results);
$variableGet = $results['id'];
?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Servicios

            <small>Panel de Control</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Servicios</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Aquí aparecen los Servicios</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">

                <div class="container-fluid">
                    <?php

                    /*if ($variableGet != null) {
                        exit;
                    }

                    $cotizacion = ctrC;
                    if (!$cotizacion) {
                        exit("No existe la cotización");
                    }*/

                    $servicios = ctrcotiza::ctrDatosCotizacion($variableGet);
                    //$caracteristicas = Cotizaciones::caracteristicasPorId($variableGet);
                    ?>
                    <div id="app">
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h3>Servicios</h3>
                                        <div class="alert alert-info">
                                            <p>Añada servicios que tienen un costo y precio, al final se calcularán los totales</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Servicio</th>
                                                            <th>Costo</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $costoTotal = 0;
                                                        $tiempoTotal = 0;
                                                        ?>
                                                        <?php
                                                        foreach ($servicios as $servicio) {
                                                            $costoTotal += $servicio->costo;
                                                            $tiempoTotal += $servicio->tiempoEnMinutos * $servicio->multiplicador;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo htmlentities($servicio->servicio) ?></td>
                                                                <td class="text-nowrap">{{<?php echo htmlentities($servicio->costo) ?> |
                                                                    dinero}}
                                                                </td>
                                                                <td>
                                                                    <a
                                                                            class="btn btn-warning"
                                                                            href="<?php printf('%s/?p=editar_servicio_de_cotizacion&idCotizacion=%s&idServicio=%s', BASE_URL, $cotizacion->id, $servicio->id) ?>">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a
                                                                            class="btn btn-danger"
                                                                            href="<?php printf('%s/?p=eliminar_servicio_de_cotizacion&idCotizacion=%s&tokenCSRF=%s&idServicio=%s', BASE_URL, $cotizacion->id, $tokenCSRF, $servicio->id) ?>">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <td><strong>Total</strong></td>
                                                            <td class="text-nowrap"><strong>{{<?php echo htmlentities($costoTotal) ?> |
                                                                    dinero}}</strong></td>
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Agregar nuevo servicio</h3>
                                        <?php
                                        $familia = ctrcotiza::ctrFamilia();
                                        ?>
                                        <div class="form-group">
                                            <label for="multiplicador">Especificado en familias</label>

                                            <select required class="form-control" name="familia" id="familia">
                                                <option value="0" >Seleccionar Familia</option>
                                                <?php foreach ($familia as $familias) { ?>
                                                    <option value="<?php echo $familias["id"]; ?>"><?php echo $familias["categoria"]; ?></option>
                                                <?php } ?>

                                            </select>

                                            <div id="listaservicios"></div>

                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('#familia').val(1);
                                                    recargarLista();

                                                    $('#familia').change(function(){
                                                        recargarLista();
                                                    });
                                                })
                                            </script>
                                            <script type="text/javascript">
                                                function recargarLista(){
                                                    $.ajax({
                                                        type:"POST",
                                                        url:"ajax/servicios.ajax.php",
                                                        data:"continente=" + $('#familia').val(),
                                                        success:function(r){
                                                            $('#listaservicios').html(r);
                                                        }
                                                    });
                                                }
                                            </script>

                                        </div>


                                        <form method="post" action="<?php echo BASE_URL ?>/?p=agregar_servicio_a_cotizacion">
                                            <input type="hidden" name="idCotizacion" value="<?php echo $variableGet ?>">
                                            <div class="form-group">
                                                <label for="servicio">Servicio</label>
                                                <input autofocus name="servicio" autocomplete="off" required type="text"
                                                       class="form-control" id="servicio" placeholder="Por ejemplo: Desarrollo de app">
                                            </div>
                                            <div class="form-group">
                                                <label for="costo">Costo</label>
                                                <input name="costo" autocomplete="off" required type="number" class="form-control"
                                                       id="costo" placeholder="Costo">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <h3>Características</h3>
                                        <div class="alert alert-info">
                                            <p>Las cosas que ayudan a describir la cotización</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Característica</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach ($caracteristicas as $caracteristica) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo htmlentities($caracteristica->caracteristica); ?></td>
                                                        <td>
                                                            <a
                                                                    class="btn btn-warning"
                                                                    href="<?php printf('%s/?p=editar_caracteristica_de_cotizacion&idCotizacion=%s&idCaracteristica=%s', BASE_URL, $cotizacion->id, $caracteristica->id) ?>">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a
                                                                    class="btn btn-danger"
                                                                    href="<?php printf('%s/?p=eliminar_caracteristica_de_cotizacion&idCotizacion=%s&tokenCSRF=%s&idCaracteristica=%s', BASE_URL, $cotizacion->id, $caracteristica->id) ?>">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Agregar característica</h3>
                                        <form method="post" action="<?php echo BASE_URL ?>/?p=agregar_caracteristica_a_cotizacion">
                                            <input type="hidden" name="idCotizacion" value="<?php echo $variableGet ?>">
                                            <div class="form-group">
                                                <label for="caracteristica">Característica</label>
                                                <input name="caracteristica" autocomplete="off" required type="text" class="form-control"
                                                       id="caracteristica" placeholder="Algo que ayude a describir la cotización">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new Vue({
                                el: "#app",
                            });
                        });
                    </script>
                    <!-- /.box-body -->
                </div>

            </div>

            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
