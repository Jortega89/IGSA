<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <style>
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>

<div class="content-wrapper">
    <section class="content-header">
        <h1>I-48-R-01 DCP-CBR</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-48-R-01 DCP-CBR</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <h4>General</h4>
        <div class="row box"
             style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <div class="row">
                <div class="col-sm-2"><label for="v0">Técnico Responsible:</label><br>
                    <input type="text" class="form-control" id="v0" name="v0"></div>
                <div class="col-sm-2"><label for="v1">Número de muestra:</label><br>
                    <input type="text" class="form-control" id="v1" name="v1"></div>
                <div class="col-sm-2"><label for="v2">Fecha:</label><br>
                    <input type="text" class="form-control" id="v2" name="v2"></div>
                <div class="col-sm-2"><label for="v3">Tipo de material/ Descripción:</label><br>
                    <input type="text" class="form-control" id="v3" name="v3"></div>
                <div class="col-sm-2"><label for="v4">Ruta:</label><br>
                    <input type="text" class="form-control" id="v4" name="v4"></div>
                <div class="col-sm-2"><label for="v5">Estación:</label><br>
                    <input type="text" class="form-control" id="v5" name="v5"></div>
            </div>

            <h4>Tipo de Mazo</h4>
            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c21-8 kg"/> 8 kg</label>
            </div>
            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c22-4.6 kg"/> 4.6 kg</label>
            </div>


        </div>

        <h4>Equipo Utilizado</h4> <div class="row box" style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">

            <div class="col-sm-2"><label for="v11">Mazo:</label><br>
                <input type="text" class="form-control" id="v11" name="v11"  ></div>
            <div class="col-sm-2"><label for="v12">Cono Dinámico de Penetración:</label><br>
                <input type="text" class="form-control" id="v12" name="v12"  ></div>
        </div>

        <h4>Muestras</h4>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra1</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel1" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID4"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra2</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel21" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID24"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra3</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel41" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID44"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra4</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel61" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID64"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra5</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel81" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID81"/>
                        </div>
                        <div id="cel82" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID82"/>
                        </div>
                        <div id="cel83" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID83"/>
                        </div>
                        <div id="cel84" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID84"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra6</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel101" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID101"/>
                        </div>
                        <div id="cel102" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID102"/>
                        </div>
                        <div id="cel103" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID103"/>
                        </div>
                        <div id="cel104" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID104"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra7</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel121" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID121"/>
                        </div>
                        <div id="cel122" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID122"/>
                        </div>
                        <div id="cel123" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID123"/>
                        </div>
                        <div id="cel124" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID124"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra8</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel141" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID141"/>
                        </div>
                        <div id="cel142" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID142"/>
                        </div>
                        <div id="cel143" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID143"/>
                        </div>
                        <div id="cel144" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID144"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra9</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel161" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID161"/>
                        </div>
                        <div id="cel162" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID162"/>
                        </div>
                        <div id="cel163" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID163"/>
                        </div>
                        <div id="cel164" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID164"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Muestra10</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php"><div id="cel181" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Número de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID181"/>
                        </div>
                        <div id="cel182" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estación/Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID182"/>
                        </div>
                        <div id="cel183" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Cantidad de Golpes</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID183"/>
                        </div>
                        <div id="cel184" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Penetración Acumulada (cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID184"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>

        <div>
            <form action="/action_page.php">
                <label for="fname">Observaciones</label>
                <textarea id="fname" name="observaciones" placeholder="" style="height:70px"></textarea>
            </form>
        </div>

    </section>
</div>
