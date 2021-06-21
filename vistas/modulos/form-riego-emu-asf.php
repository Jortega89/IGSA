
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
        <h1>I-61-R-01 Punto riego de emulsión asfáltica</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-61-R-01 Punto riego de emulsión asfáltica</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">General</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">

                        <div class="col-sm-4"><label for="v0">Técnico Responsable:</label><br>
                            <input type="text" class="form-control" id="v0" name="v0"  ></div>
                        <div class="col-sm-4"><label for="v1">Responsable de Tabular:</label><br>
                            <input type="text" class="form-control" id="v1" name="v1"  ></div>
                        <div class="col-sm-4"><label for="v2">Responsable de Revisión:</label><br>
                            <input type="text" class="form-control" id="v2" name="v2"  ></div>
                        <div class="col-sm-4"><label for="v3">Camión Placa:</label><br>
                            <input type="text" class="form-control" id="v3" name="v3"  ></div>
                        <div class="col-sm-4"><label for="v4">Proyecto:</label><br>
                            <input type="text" class="form-control" id="v4" name="v4"  ></div>
                        <div class="col-sm-4"><label for="v5">Fecha:</label><br>
                            <input type="text" class="form-control" id="v5" name="v5"  ></div>
                        <div class="col-sm-4"><label for="v6">Hora:</label><br>
                            <input type="text" class="form-control" id="v6" name="v6"  ></div>
                        <div class="col-sm-4"><label for="v7">Estación/Ubicación:</label><br>
                            <input type="text" class="form-control" id="v7" name="v7"  ></div>
                        <div class="col-sm-4"><label for="v8">Código de Balanza:</label><br>
                            <input type="text" class="form-control" id="v8" name="v8"  ></div>
                        <div class="col-sm-4"><label for="v9">Código de Bandejas:</label><br>
                            <input type="text" class="form-control" id="v9" name="v9"  ></div>
                        <div class="col-sm-4"><label for="v10">Código de Termocúpula:</label><br>
                            <input type="text" class="form-control" id="v10" name="v10"  ></div>

                    </form>
                </div>
            </div>
        </div>

<h4>Datos</h4>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Bandeja#1</h3>
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
                                Peso Bandeja(g)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Peso Bandeja + Emulsion</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Peso Emulsion(g)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Largo de la Bandeja</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ancho de la Bandeja(m)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Área de Bandeja(m²)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID6"/>
                        </div>
                        <div id="cel7" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Emulsion (kg/m²)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID7"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Bandeja#2</h3>
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
                                Peso Bandeja(g)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Peso Bandeja + Emulsion</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Peso Emulsion(g)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Largo de la Bandeja</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ancho de la Bandeja(m)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Área de Bandeja(m²)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID26"/>
                        </div>
                        <div id="cel27" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Emulsion (kg/m²)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID27"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Bandeja#3</h3>
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
                                Peso Bandeja(g)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Peso Bandeja + Emulsion</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Peso Emulsion(g)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Largo de la Bandeja</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ancho de la Bandeja(m)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Área de Bandeja(m²)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID46"/>
                        </div>
                        <div id="cel47" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Emulsion (kg/m²)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID47"/>
                        </div>
                        <div id="cel48" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Promedio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID48"/>
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

        <h3>Tabla Factores de Corrección Temperatura-Volumen Emulsión Asfáltica</h3>
        <div>
            <div class="col-sm-6">
                <img class="img-responsive " style="width: 192px" src="vistas/img/res/riego-asf-col1.png">
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" style="width: 188px" src="vistas/img/res/riego-asf-col2.png">
            </div>
        </div>


        <h5>Nota</h5> <div class="row box" style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <p> Los factores de corrección son tomados del MS-19 ajustados a 25°C</p>
        </div>
    </section>
</div>
