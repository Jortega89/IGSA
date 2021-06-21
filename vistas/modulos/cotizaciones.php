<?php
$cotizaciones = ctrcotiza::ctrMostrarCotizacion();
?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Cotizaciones

            <small>Panel de Control</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Cotizaciones</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Aquí aparecen las cotizaciones</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm">
                        <div>
                            <a style="margin-left: 1%;" href="coti" class="btn btn-success">
                                <i class="fa fa-plus"></i> Nueva cotización
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="table-responsive">
                            <table class="table tablas table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                    <th>Detalles y características</th>
                                    <th>PDF</th>
                                    <th>Imprimir</th>
                                    <th>Generar proforma</th>
                                    <th>Enviar factura</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($cotizaciones as $cotizacion) { ?>
                                    <tr>
                                        <td><?php echo $cotizacion["id"]?></td>
                                        <td><?php echo htmlentities($cotizacion["nombre"]) ?></td>
                                        <td><?php echo htmlentities($cotizacion["descripcion"]) ?></td>
                                        <td><?php echo htmlentities($cotizacion["fecha"]) ?></td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="detalles-caracteristicas-cotizacion?id=<?php echo $cotizacion["id"] ?>">
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="<?php echo BASE_URL ?>/?p=imprimir_cotizacion&id=<?php echo $cotizacion->id ?>">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="<?php echo BASE_URL ?>/?p=imprimir_cotizacion&id=<?php echo $cotizacion->id ?>">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="<?php echo BASE_URL ?>/?p=imprimir_cotizacion&id=<?php echo $cotizacion->id ?>">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning"
                                               href="<?php echo BASE_URL ?>/?p=editar_cotizacion&id=<?php echo $cotizacion->id ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning"
                                               href="<?php echo BASE_URL ?>/?p=editar_cotizacion&id=<?php echo $cotizacion->id ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger"
                                               href="<?php echo BASE_URL ?>/?p=eliminar_cotizacion&id=<?php echo $cotizacion->id ?>&tokenCSRF=<?php echo $tokenCSRF ?>">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


