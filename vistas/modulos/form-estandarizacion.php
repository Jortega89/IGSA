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
        <h1>I-21-R-02 ESTANDARIZACION</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-21-R-02 ESTANDARIZACION</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <h4 style=font-weight: bold">NOTAS</h4>
        <div style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px">
            <p>
                Nota: En los densímetros marca Humboldt la estandarización se realizará hasta que no presente error, o
                que el error sea menor a los máximos permitidos.
            </p>
        </div>
<br>
        <div class="row">

            <div class="col-sm-2"><label for="v0">Código del Equipo:</label><br>
                <input type="text" class="form-control" id="v0" name="v0"></div>
            <div class="col-sm-2"><label for="v1">Marca y Modelo:</label><br>
                <input type="text" class="form-control" id="v1" name="v1"></div>
        </div>

        <h4>Estandarización</h4>
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación1</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
6"/>
                        </div>
                        <div id="cel7" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
7"/>
                        </div>
                        <div id="cel8" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
8"/>
                        </div>
                        <div id="cel9" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID9"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación2</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
26"/>
                        </div>
                        <div id="cel27" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
27"/>
                        </div>
                        <div id="cel28" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
28"/>
                        </div>
                        <div id="cel29" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
29"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación3</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
46"/>
                        </div>
                        <div id="cel47" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
47"/>
                        </div>
                        <div id="cel48" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
48"/>
                        </div>
                        <div id="cel49" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
49"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación4</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
64"/>
                        </div>
                        <div id="cel65" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
65"/>
                        </div>
                        <div id="cel66" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
66"/>
                        </div>
                        <div id="cel67" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
67"/>
                        </div>
                        <div id="cel68" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
68"/>
                        </div>
                        <div id="cel69" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
69"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación5</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
81"/>
                        </div>
                        <div id="cel82" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
82"/>
                        </div>
                        <div id="cel83" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
83"/>
                        </div>
                        <div id="cel84" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
84"/>
                        </div>
                        <div id="cel85" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
85"/>
                        </div>
                        <div id="cel86" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
86"/>
                        </div>
                        <div id="cel87" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
87"/>
                        </div>
                        <div id="cel88" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
88"/>
                        </div>
                        <div id="cel89" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
89"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación6</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
101"/>
                        </div>
                        <div id="cel102" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
102"/>
                        </div>
                        <div id="cel103" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
103"/>
                        </div>
                        <div id="cel104" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
104"/>
                        </div>
                        <div id="cel105" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
105"/>
                        </div>
                        <div id="cel106" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
106"/>
                        </div>
                        <div id="cel107" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
107"/>
                        </div>
                        <div id="cel108" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
108"/>
                        </div>
                        <div id="cel109" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
109"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación7</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
121"/>
                        </div>
                        <div id="cel122" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
122"/>
                        </div>
                        <div id="cel123" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
123"/>
                        </div>
                        <div id="cel124" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
124"/>
                        </div>
                        <div id="cel125" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
125"/>
                        </div>
                        <div id="cel126" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
126"/>
                        </div>
                        <div id="cel127" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
127"/>
                        </div>
                        <div id="cel128" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
128"/>
                        </div>
                        <div id="cel129" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
129"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación8</h3>
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
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
141"/>
                        </div>
                        <div id="cel142" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
142"/>
                        </div>
                        <div id="cel143" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
143"/>
                        </div>
                        <div id="cel144" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
144"/>
                        </div>
                        <div id="cel145" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
145"/>
                        </div>
                        <div id="cel146" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
146"/>
                        </div>
                        <div id="cel147" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
147"/>
                        </div>
                        <div id="cel148" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
148"/>
                        </div>
                        <div id="cel149" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
149"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación9</h3>
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
                        <div id="cel161" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
161"/>
                        </div>
                        <div id="cel162" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
162"/>
                        </div>
                        <div id="cel163" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
163"/>
                        </div>
                        <div id="cel164" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
164"/>
                        </div>
                        <div id="cel165" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
165"/>
                        </div>
                        <div id="cel166" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
166"/>
                        </div>
                        <div id="cel167" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
167"/>
                        </div>
                        <div id="cel168" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
168"/>
                        </div>
                        <div id="cel169" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
169"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Verificación10</h3>
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
                        <div id="cel181" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha de Verificación</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
181"/>
                        </div>
                        <div id="cel182" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Hora de Inicio</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
182"/>
                        </div>
                        <div id="cel183" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
183"/>
                        </div>
                        <div id="cel184" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
184"/>
                        </div>
                        <div id="cel185" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (1 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
185"/>
                        </div>
                        <div id="cel186" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad
                                (kg/m3)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
186"/>
                        </div>
                        <div id="cel187" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Promedio últimas 4 lecturas</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
187"/>
                        </div>
                        <div id="cel188" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                % ERR
                                (2 % máximo)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
188"/>
                        </div>
                        <div id="cel189" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Técnico Responsible</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
189"/>
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






