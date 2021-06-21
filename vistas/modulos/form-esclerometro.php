
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
        <h1>I-62-R-01 Esclerómetro</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-62-R-01 Esclerómetro</li>
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
                        <div class="col-sm-4"><label for="v3">Fecha:</label><br>
                            <input type="text" class="form-control" id="v3" name="v3"  ></div>
                        <div class="col-sm-4"><label for="v4">Lugar:</label><br>
                            <input type="text" class="form-control" id="v4" name="v4"  ></div>
                        <div class="col-sm-4"><label for="v5">Código de Esclerómetro:</label><br>
                            <input type="text" class="form-control" id="v5" name="v5"  ></div>

                    </form>
                </div>
            </div>
        </div>

<h4>Datos</h4>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila1</h3>
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
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estructura</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Angulo (Derecha→/ Arriba↑/ Abajo↓)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura1</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura2</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID6"/>
                        </div>
                        <div id="cel7" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura3</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID7"/>
                        </div>
                        <div id="cel8" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura4</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID8"/>
                        </div>
                        <div id="cel9" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura5</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID9"/>
                        </div>
                        <div id="cel10" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura6</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID10"/>
                        </div>
                        <div id="cel11" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura7</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID11"/>
                        </div>
                        <div id="cel12" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura8</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID12"/>
                        </div>
                        <div id="cel13" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura9</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID13"/>
                        </div>
                        <div id="cel14" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura Promedio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID14"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila2</h3>
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
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estructura</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Angulo (Derecha→/ Arriba↑/ Abajo↓)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura1</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura2</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID26"/>
                        </div>
                        <div id="cel27" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura3</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID27"/>
                        </div>
                        <div id="cel28" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura4</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID28"/>
                        </div>
                        <div id="cel29" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura5</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID29"/>
                        </div>
                        <div id="cel30" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura6</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID30"/>
                        </div>
                        <div id="cel31" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura7</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID31"/>
                        </div>
                        <div id="cel32" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura8</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID32"/>
                        </div>
                        <div id="cel33" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura9</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID33"/>
                        </div>
                        <div id="cel34" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura Promedio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID34"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila3</h3>
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
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estructura</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Angulo (Derecha→/ Arriba↑/ Abajo↓)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura1</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura2</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID46"/>
                        </div>
                        <div id="cel47" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura3</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID47"/>
                        </div>
                        <div id="cel48" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura4</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID48"/>
                        </div>
                        <div id="cel49" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura5</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID49"/>
                        </div>
                        <div id="cel50" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura6</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID50"/>
                        </div>
                        <div id="cel51" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura7</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID51"/>
                        </div>
                        <div id="cel52" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura8</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID52"/>
                        </div>
                        <div id="cel53" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura9</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID53"/>
                        </div>
                        <div id="cel54" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura Promedio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID54"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila4</h3>
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
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estructura</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Angulo (Derecha→/ Arriba↑/ Abajo↓)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID64"/>
                        </div>
                        <div id="cel65" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura1</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID65"/>
                        </div>
                        <div id="cel66" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura2</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID66"/>
                        </div>
                        <div id="cel67" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura3</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID67"/>
                        </div>
                        <div id="cel68" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura4</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID68"/>
                        </div>
                        <div id="cel69" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura5</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID69"/>
                        </div>
                        <div id="cel70" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura6</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID70"/>
                        </div>
                        <div id="cel71" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura7</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID71"/>
                        </div>
                        <div id="cel72" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura8</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID72"/>
                        </div>
                        <div id="cel73" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura9</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID73"/>
                        </div>
                        <div id="cel74" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura Promedio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID74"/>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila5</h3>
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
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID81"/>
                        </div>
                        <div id="cel82" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Estructura</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID82"/>
                        </div>
                        <div id="cel83" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID83"/>
                        </div>
                        <div id="cel84" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Angulo (Derecha→/ Arriba↑/ Abajo↓)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID84"/>
                        </div>
                        <div id="cel85" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura1</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID85"/>
                        </div>
                        <div id="cel86" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura2</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID86"/>
                        </div>
                        <div id="cel87" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura3</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID87"/>
                        </div>
                        <div id="cel88" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura4</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID88"/>
                        </div>
                        <div id="cel89" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura5</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID89"/>
                        </div>
                        <div id="cel90" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura6</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID90"/>
                        </div>
                        <div id="cel91" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura7</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID91"/>
                        </div>
                        <div id="cel92" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura8</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID92"/>
                        </div>
                        <div id="cel93" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura9</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID93"/>
                        </div>
                        <div id="cel94" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px" class="label-tabla">
                                Lectura Promedio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID94"/>
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
