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
        <h1>I-16-I-30-I-32-I-37-R-01 Concreto Fresco</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-16-I-30-I-32-I-37-R-01 Concreto Fresco</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <h4>General</h4> <div class="row box" style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <div class="col-sm-4"><label for="v0">Descripción de muestra:</label><br>
                <input type="text" class="form-control" id="v0" name="v0"></div>
            <div class="col-sm-4"><label for="v1">Fecha de Inicio:</label><br>
                <input type="text" class="form-control" id="v1" name="v1"></div>
            <div class="col-sm-4"><label for="v2">Hora de Inicio:</label><br>
                <input type="text" class="form-control" id="v2" name="v2"></div>
            <div class="col-sm-4"><label for="v3">Hora Fin:</label><br>
                <input type="text" class="form-control" id="v3" name="v3"></div>
            <div class="col-sm-4"><label for="v4">Fecha desmoldeo:</label><br>
                <input type="text" class="form-control" id="v4" name="v4"></div>
            <br><br>
        </div>


        <div class="row box" style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <h4>Pruebas realizadas en:</h4>
            <div class="col-sm-2">
                <label class="checkbox-inline"><input type="checkbox" id="c21-Campo"/> Campo</label>
            </div>
            <div class="col-sm-2"><label class="checkbox-inline">
                    <input type="checkbox" id="c22-Labora"/> Laboratorio</label>
            </div>
            <div class="col-sm-2"><label class="checkbox-inline">
                    <input type="checkbox" id="c23-Planta"/> Planta</label>
            </div>

        </div>

        <h4>Datos de Concreto</h4>
        <div class="row box" style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <div class="col-sm-2"><label for="v5">Origen del concreto:</label><br>
                <input type="text" class="form-control" id="v5" name="v5"></div>
            <div class="col-sm-2"><label for="v6">Resistencia del concreto (kg/cm²):</label><br>
                <input type="text" class="form-control" id="v6" name="v6"></div>
        </div>

        <h4>Viajes</h4>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 1</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
6"/>
                        </div>
                        <div id="cel7" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
7"/>
                        </div>
                        <div id="cel8" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
8"/>
                        </div>
                        <div id="cel9" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
9"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 2</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
26"/>
                        </div>
                        <div id="cel27" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
27"/>
                        </div>
                        <div id="cel28" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
28"/>
                        </div>
                        <div id="cel29" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
29"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 3</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
46"/>
                        </div>
                        <div id="cel47" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
47"/>
                        </div>
                        <div id="cel48" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
48"/>
                        </div>
                        <div id="cel49" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
49"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 4</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
64"/>
                        </div>
                        <div id="cel65" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
65"/>
                        </div>
                        <div id="cel66" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
66"/>
                        </div>
                        <div id="cel67" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
67"/>
                        </div>
                        <div id="cel68" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
68"/>
                        </div>
                        <div id="cel69" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
69"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 5</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
81"/>
                        </div>
                        <div id="cel82" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
82"/>
                        </div>
                        <div id="cel83" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
83"/>
                        </div>
                        <div id="cel84" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
84"/>
                        </div>
                        <div id="cel85" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
85"/>
                        </div>
                        <div id="cel86" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
86"/>
                        </div>
                        <div id="cel87" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
87"/>
                        </div>
                        <div id="cel88" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
88"/>
                        </div>
                        <div id="cel89" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
89"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 6</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
101"/>
                        </div>
                        <div id="cel102" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
102"/>
                        </div>
                        <div id="cel103" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
103"/>
                        </div>
                        <div id="cel104" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
104"/>
                        </div>
                        <div id="cel105" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
105"/>
                        </div>
                        <div id="cel106" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
106"/>
                        </div>
                        <div id="cel107" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
107"/>
                        </div>
                        <div id="cel108" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
108"/>
                        </div>
                        <div id="cel109" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
109"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 7</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
121"/>
                        </div>
                        <div id="cel122" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
122"/>
                        </div>
                        <div id="cel123" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
123"/>
                        </div>
                        <div id="cel124" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
124"/>
                        </div>
                        <div id="cel125" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
125"/>
                        </div>
                        <div id="cel126" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
126"/>
                        </div>
                        <div id="cel127" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
127"/>
                        </div>
                        <div id="cel128" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
128"/>
                        </div>
                        <div id="cel129" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
129"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Viaje 8</h3>
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
                                Cantidad_acarreo_(m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
141"/>
                        </div>
                        <div id="cel142" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad_Relativa</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
142"/>
                        </div>
                        <div id="cel143" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Moldeo_Cilindros</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
143"/>
                        </div>
                        <div id="cel144" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
144"/>
                        </div>
                        <div id="cel145" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. sin aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
145"/>
                        </div>
                        <div id="cel146" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Asent. con aditivo (mm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
146"/>
                        </div>
                        <div id="cel147" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Temp. concreto
                                (°C)
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
147"/>
                        </div>
                        <div id="cel148" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora
                                de muestreo
                            </label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
148"/>
                        </div>
                        <div id="cel149" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Elemento estructural y Ubicación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
149"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <h4>Temperaturas</h4> <div class="row box" style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px; margin: auto">
            <div class="col-sm-4"><label for="v7">Temperatura Campo Inicial:</label><br>
                <input type="text" class="form-control" id="v7" name="v7" placeholder="ºC"></div>
            <div class="col-sm-4"><label for="v8">Temperatura Campo Final:</label><br>
                <input type="text" class="form-control" id="v8" name="v8" placeholder="ºC"></div>
        </div>

        <h4>Códigos</h4>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Códigos de Equipos</h3>
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
                        <div id="cel241" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Molde para concreto</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
241"/>
                        </div>
                        <div id="cel242" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cono de asentamiento</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
242"/>
                        </div>
                        <div id="cel243" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Varilla de Apisonamiento</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
243"/>
                        </div>
                        <div id="cel244" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Termómetro</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
244"/>
                        </div>
                        <div id="cel245" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cinta métrica</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
245"/>
                        </div>
                        <div id="cel246" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Mazo</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
246"/>
                        </div>
                        <div id="cel247" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cronómetro</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
247"/>
                        </div>
                        <div id="cel248" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Batidora para concreto</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
248"/>
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

        <div class="col-sm-2"><label for="v9">Técnico Responsable:</label><br>
            <input type="text" class="form-control" id="v9" name="v9"></div>


        <br><br><br>
    </section>
</div>
