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
        <h1>I-21-R-01 DENSIMETRIA CAMPO</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-21-R-01 DENSIMETRIA CAMPO</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-sm-2"><label for="v0">Nombre del técnico responsable:</label><br>
            <input type="text" class="form-control" id="v0" name="v0"></div>
        <div class="col-sm-2"><label for="v1">Responsable de revisión:</label><br>
            <input type="text" class="form-control" id="v1" name="v1"></div>
        <div class="col-sm-2"><label for="v2">Responsable de Tabulación:</label><br>
            <input type="text" class="form-control" id="v2" name="v2"></div>
        <div class="col-sm-2"><label for="v3">Identificación del densímetro nuclear:</label><br>
            <input type="text" class="form-control" id="v3" name="v3"></div>
        <div class="col-sm-2"><label for="v4">Equipo adicional (si hay):</label><br>
            <input type="text" class="form-control" id="v4" name="v4"></div>
        <div class="col-sm-2"><label for="v5">Identificación de equipo adicional (si hay):</label><br>
            <input type="text" class="form-control" id="v5" name="v5"></div>
        <br>
        <h4 style="font-weight: bold">NOTAS</h4>
        <div style="background-color: #FFFFFF; border: #0a0a0a; border-radius: 4px; padding: 5px" >
            <p>¹ Densidad seca o in situ suministrada directamente en el densímetro nuclear.</p>
            <p>² Densidad húmeda suministrada directamente en el densímetro nuclear.</p>
            <p>³ Porcentaje de humedad suministrado directamente en el densímetro nuclear.</p>
            <p>⁴ Densidad comparativa obtenida con el método de ensayo AASTHO: T 99,T 134,T 180.</p>
            <p> <img src="vistas/img/res/img.png"> u obtenida directamente de cálculo interno del densímetro.
            </p>
        </div>

        <br><br>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel1" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
6"/>
                        </div>
                        <div id="cel7" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
7"/>
                        </div>
                        <div id="cel8" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
8"/>
                        </div>
                        <div id="cel9" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
9"/>
                        </div>
                        <div id="cel10" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
10"/>
                        </div>
                        <div id="cel11" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
11"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel21" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
26"/>
                        </div>
                        <div id="cel27" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
27"/>
                        </div>
                        <div id="cel28" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
28"/>
                        </div>
                        <div id="cel29" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
29"/>
                        </div>
                        <div id="cel30" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
30"/>
                        </div>
                        <div id="cel31" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
31"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel41" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
46"/>
                        </div>
                        <div id="cel47" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
47"/>
                        </div>
                        <div id="cel48" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
48"/>
                        </div>
                        <div id="cel49" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
49"/>
                        </div>
                        <div id="cel50" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
50"/>
                        </div>
                        <div id="cel51" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
51"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila 4</h3>
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
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
64"/>
                        </div>
                        <div id="cel65" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
65"/>
                        </div>
                        <div id="cel66" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
66"/>
                        </div>
                        <div id="cel67" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
67"/>
                        </div>
                        <div id="cel68" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
68"/>
                        </div>
                        <div id="cel69" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
69"/>
                        </div>
                        <div id="cel70" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
70"/>
                        </div>
                        <div id="cel71" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
71"/>
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
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div id="cel81" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
81"/>
                        </div>
                        <div id="cel82" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
82"/>
                        </div>
                        <div id="cel83" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
83"/>
                        </div>
                        <div id="cel84" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
84"/>
                        </div>
                        <div id="cel85" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
85"/>
                        </div>
                        <div id="cel86" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
86"/>
                        </div>
                        <div id="cel87" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
87"/>
                        </div>
                        <div id="cel88" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
88"/>
                        </div>
                        <div id="cel89" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
89"/>
                        </div>
                        <div id="cel90" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
90"/>
                        </div>
                        <div id="cel91" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
91"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila6</h3>
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
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
101"/>
                        </div>
                        <div id="cel102" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
102"/>
                        </div>
                        <div id="cel103" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
103"/>
                        </div>
                        <div id="cel104" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
104"/>
                        </div>
                        <div id="cel105" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
105"/>
                        </div>
                        <div id="cel106" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
106"/>
                        </div>
                        <div id="cel107" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
107"/>
                        </div>
                        <div id="cel108" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
108"/>
                        </div>
                        <div id="cel109" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
109"/>
                        </div>
                        <div id="cel110" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
110"/>
                        </div>
                        <div id="cel111" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
111"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila7</h3>
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
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
121"/>
                        </div>
                        <div id="cel122" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
122"/>
                        </div>
                        <div id="cel123" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
123"/>
                        </div>
                        <div id="cel124" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
124"/>
                        </div>
                        <div id="cel125" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
125"/>
                        </div>
                        <div id="cel126" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
126"/>
                        </div>
                        <div id="cel127" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
127"/>
                        </div>
                        <div id="cel128" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
128"/>
                        </div>
                        <div id="cel129" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
129"/>
                        </div>
                        <div id="cel130" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
130"/>
                        </div>
                        <div id="cel131" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
131"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila8</h3>
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
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
141"/>
                        </div>
                        <div id="cel142" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
142"/>
                        </div>
                        <div id="cel143" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
143"/>
                        </div>
                        <div id="cel144" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
144"/>
                        </div>
                        <div id="cel145" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
145"/>
                        </div>
                        <div id="cel146" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
146"/>
                        </div>
                        <div id="cel147" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
147"/>
                        </div>
                        <div id="cel148" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
148"/>
                        </div>
                        <div id="cel149" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
149"/>
                        </div>
                        <div id="cel150" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
150"/>
                        </div>
                        <div id="cel151" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
151"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box" style="margin-bottom: 0">
            <div class="box-header with-border">
                <h3 class="box-title">Fila9</h3>
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
                                Fecha</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
161"/>
                        </div>
                        <div id="cel162" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Numero de muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
162"/>
                        </div>
                        <div id="cel163" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Condiciones Ambientales</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
163"/>
                        </div>
                        <div id="cel164" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Localización</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
164"/>
                        </div>
                        <div id="cel165" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Observaciones</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
165"/>
                        </div>
                        <div id="cel166" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Profundidad(cm)</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
166"/>
                        </div>
                        <div id="cel167" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Seca o in situ (kg/m3)¹</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
167"/>
                        </div>
                        <div id="cel168" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Húmeda (kg/m3)²</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
168"/>
                        </div>
                        <div id="cel169" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Humedad(%)³</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
169"/>
                        </div>
                        <div id="cel170" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Compact.(%)⁵</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
170"/>
                        </div>
                        <div id="cel171" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Densidad Comparativa(kg/m3)⁴</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
171"/>
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
