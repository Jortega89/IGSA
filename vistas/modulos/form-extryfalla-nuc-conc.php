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
        <h1>I-28-R-01 EXTR. Y FALLA NUCLEOS CONCRETO</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-28-R-01 EXTR. Y FALLA NUCLEOS CONCRETO</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <h4>Encargados</h4>
        <div class="row box"
             style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <div class="row" style="">
                <div class="col-sm-4"><label for="v3">Tecnico encargado de extracción:</label><br>
                    <input type="text" class="form-control" id="v3" name="v3"></div>
                <div class="col-sm-4"><label for="v4">Fecha:</label>
                    <input type="text" class="form-control" id="v4" name="v4"></div>
            </div>
            <div class="row" style="">
                <div class="col-sm-4"><label for="v5">Técnico encargado de falla:</label><br>
                    <input type="text" class="form-control" id="v5" name="v5"></div>
                <div class="col-sm-4"><label for="v6">Fecha:</label><br>
                    <input type="text" class="form-control" id="v6" name="v6"></div>
            </div>
            <div class="row" style="">
                <div class="col-sm-4"><label for="v7">Responsable de revisión:</label><br>
                    <input type="text" class="form-control" id="v7" name="v7"></div>
                <div class="col-sm-4"><label for="v8">Fecha:</label><br>
                    <input type="text" class="form-control" id="v8" name="v8"></div>
            </div>

        </div>


        <h4>Código de Equipo</h4>
        <div class="row box"
             style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <div class="col-sm-3"><label for="v0">Cinta Pi:</label><br>
                <input type="text" class="form-control" id="v0" name="v0"></div>
            <div class="col-sm-3"><label for="v1">Máquina de compresión:</label><br>
                <input type="text" class="form-control" id="v1" name="v1"></div>
            <div class="col-sm-3"><label for="v2">Cinta métrica:</label><br>
                <input type="text" class="form-control" id="v2" name="v2"></div>
        </div>

        <h4 style=font-weight: bold">NOTAS</h4>
        <div style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px">
            <p>¹ La longitud posterior a la extracción se reporta a los 5 mm (0,2”) más cercanos</p>
            <p>² Los diámetros del núcleo previo a la falla se reportan al 0,01” más cercano</p>
            <p>³ El diámetro en los extremos no debe diferir en más de 2% de diámetro promedio</p>
            <p>⁴ La dimensión previa a la falla se debe registrar a los 5 mm (0,2”) más cercanos</p>
            <p>Nota: La relación Longitud/Diámetro debe encontrarse entre 1.9 y 2.1, medidos en la altura media del
                espécimen y a 90° uno del otro, 1,75 no aplica corrección.</p>

            <img src="vistas/img/res/extryfallanucconcr.png">
            <p>D= Diámetro mayor</p>
            <p>d= Diámetro menor</p>
        </div>
        <br><br>

        <h4>Datos</h4>

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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel1" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID6"/>
                        </div>
                        <div id="cel7" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID7"/>
                        </div>
                        <div id="cel8" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID8"/>
                        </div>
                        <div id="cel9" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID9"/>
                        </div>
                        <div id="cel10" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID10"/>
                        </div>
                        <div id="cel11" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID11"/>
                        </div>
                        <div id="cel12" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID12"/>
                        </div>
                        <div id="cel13" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID13"/>
                        </div>
                        <div id="cel14" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID14"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel21" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID26"/>
                        </div>
                        <div id="cel27" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID27"/>
                        </div>
                        <div id="cel28" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID28"/>
                        </div>
                        <div id="cel29" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID29"/>
                        </div>
                        <div id="cel30" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID30"/>
                        </div>
                        <div id="cel31" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID31"/>
                        </div>
                        <div id="cel32" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID32"/>
                        </div>
                        <div id="cel33" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID33"/>
                        </div>
                        <div id="cel34" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID34"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel41" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID46"/>
                        </div>
                        <div id="cel47" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID47"/>
                        </div>
                        <div id="cel48" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID48"/>
                        </div>
                        <div id="cel49" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID49"/>
                        </div>
                        <div id="cel50" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID50"/>
                        </div>
                        <div id="cel51" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID51"/>
                        </div>
                        <div id="cel52" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID52"/>
                        </div>
                        <div id="cel53" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID53"/>
                        </div>
                        <div id="cel54" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID54"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel61" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID64"/>
                        </div>
                        <div id="cel65" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID65"/>
                        </div>
                        <div id="cel66" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID66"/>
                        </div>
                        <div id="cel67" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID67"/>
                        </div>
                        <div id="cel68" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID68"/>
                        </div>
                        <div id="cel69" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID69"/>
                        </div>
                        <div id="cel70" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID70"/>
                        </div>
                        <div id="cel71" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID71"/>
                        </div>
                        <div id="cel72" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID72"/>
                        </div>
                        <div id="cel73" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID73"/>
                        </div>
                        <div id="cel74" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID74"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel81" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID81"/>
                        </div>
                        <div id="cel82" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID82"/>
                        </div>
                        <div id="cel83" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID83"/>
                        </div>
                        <div id="cel84" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID84"/>
                        </div>
                        <div id="cel85" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID85"/>
                        </div>
                        <div id="cel86" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID86"/>
                        </div>
                        <div id="cel87" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID87"/>
                        </div>
                        <div id="cel88" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID88"/>
                        </div>
                        <div id="cel89" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID89"/>
                        </div>
                        <div id="cel90" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID90"/>
                        </div>
                        <div id="cel91" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID91"/>
                        </div>
                        <div id="cel92" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID92"/>
                        </div>
                        <div id="cel93" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID93"/>
                        </div>
                        <div id="cel94" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID94"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel101" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID101"/>
                        </div>
                        <div id="cel102" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID102"/>
                        </div>
                        <div id="cel103" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID103"/>
                        </div>
                        <div id="cel104" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID104"/>
                        </div>
                        <div id="cel105" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID105"/>
                        </div>
                        <div id="cel106" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID106"/>
                        </div>
                        <div id="cel107" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID107"/>
                        </div>
                        <div id="cel108" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID108"/>
                        </div>
                        <div id="cel109" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID109"/>
                        </div>
                        <div id="cel110" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID110"/>
                        </div>
                        <div id="cel111" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID111"/>
                        </div>
                        <div id="cel112" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID112"/>
                        </div>
                        <div id="cel113" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID113"/>
                        </div>
                        <div id="cel114" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID114"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel121" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID121"/>
                        </div>
                        <div id="cel122" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID122"/>
                        </div>
                        <div id="cel123" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID123"/>
                        </div>
                        <div id="cel124" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID124"/>
                        </div>
                        <div id="cel125" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID125"/>
                        </div>
                        <div id="cel126" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID126"/>
                        </div>
                        <div id="cel127" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID127"/>
                        </div>
                        <div id="cel128" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID128"/>
                        </div>
                        <div id="cel129" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID129"/>
                        </div>
                        <div id="cel130" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID130"/>
                        </div>
                        <div id="cel131" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID131"/>
                        </div>
                        <div id="cel132" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID132"/>
                        </div>
                        <div id="cel133" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID133"/>
                        </div>
                        <div id="cel134" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID134"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel141" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Número de Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID141"/>
                        </div>
                        <div id="cel142" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID142"/>
                        </div>
                        <div id="cel143" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Extracción</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID143"/>
                        </div>
                        <div id="cel144" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud extracción (mm)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID144"/>
                        </div>
                        <div id="cel145" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Colocación </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID145"/>
                        </div>
                        <div id="cel146" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID146"/>
                        </div>
                        <div id="cel147" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID147"/>
                        </div>
                        <div id="cel148" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 1 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID148"/>
                        </div>
                        <div id="cel149" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro 2 (“) ²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID149"/>
                        </div>
                        <div id="cel150" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro Promedio (“)(D)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID150"/>
                        </div>
                        <div id="cel151" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Diámetro en el extremo (“) ³ (d)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID151"/>
                        </div>
                        <div id="cel152" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Longitud después del corte (“) ⁴ (L)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID152"/>
                        </div>
                        <div id="cel153" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Aceptación para falla</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID153"/>
                        </div>
                        <div id="cel154" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Carga de ensayo (kN)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID154"/>
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
