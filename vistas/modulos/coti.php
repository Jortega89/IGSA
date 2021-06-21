<?php

$clientes = ControladorClientes::ctrMostrarClientes(null, null);

?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Nueva cotizaciones

            <small>Administración</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="cotizaciones"><i class="fa fa-dashboard"></i> Cotizaciones</a></li>

            <li class="active">Nueva cotización</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Crear nueva cotización</h3>

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
                    <div class="row">
                    <div class="col-sm">

                        <form method="post" action="guardar-cotizacion">
                            <div class="form-group">
                                <label for="idCliente">Seleccione un cliente</label>
                                <select required class="form-control" name="idCliente" id="idCliente">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($clientes as $cliente) { ?>
                                        <option name ="idCliente" value="<?php echo $cliente["id"]; ?>"><?php echo $cliente["nombre"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción de la cotización</label>
                                <input autofocus name="descripcion" autocomplete="off" required type="text" class="form-control"
                                       id="descripcion" placeholder="Nombre de la cotizacíon o el número">
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input value="<?php echo date("Y-m-d") ?>" name="fecha" autocomplete="off" required type="date"
                                       class="form-control" id="fecha">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a class="btn btn-success" href="cotizaciones">&larr; Volver</a>
                        </form>
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


