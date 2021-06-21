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

</head>`

<div class="content-wrapper">
    <section class="content-header">
        <h1>I-07-I-14-R-01 Muestreo</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">I-07-I-14-R-01 Muestreo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
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
                        <div>
                            <div class="col-sm-2"><label for="v0">Número de Muestra:</label><br>
                                <input type="text" class="form-control" id="v0" name="v0">
                            </div>
                            <div class="col-sm-2"><label for="v1">Cantidad:</label><br>
                                <input type="text" class="form-control" id="v1" name="v1">
                            </div>
                            <div class="col-sm-2"><label for="v2">Recibido Por:</label><br>
                                <input type="text" class="form-control" id="v2" name="v2">
                            </div>
                            <div class="col-sm-2"><label for="v3">Fecha:</label><br>
                                <input type="text" class="form-control" id="v3" name="v3">
                            </div>
                            <div class="col-sm-2"><label for="v4">Hora:</label><br>
                                <input type="text" class="form-control" id="v4" name="v4">
                            </div>
                            <div class="col-sm-2"><label for="v5">Lugar de muestreo:</label>
                                <input type="text" class="form-control" id="v5" name="v5"></div>
                            <div class="col-sm-2"><label for="v6">Nombre del proyecto:</label>
                                <input type="text" class="form-control" id="v6" name="v6"></div>
                            <div class="col-sm-2"><label for="v7">Descripción del material:</label><br>
                                <input type="text" class="form-control" id="v7" name="v7"></div>
                            <div class="col-sm-2"><label for="v8">Encargado del muestreo:</label>
                                <input type="text" class="form-control" id="v8" name="v8"></div>
                            <div class="col-sm-2"><label for="v9">Responsable de entrega:</label>
                                <input type="text" class="form-control" id="v9" name="v9"></div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group" style="width:100%">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div class="row" style="padding-left: 15px">
                            <h4>Ingreso de la muestra:</h4>
                            <div class="col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="Muestreada por laboratorio"/> Muestreada por laboratorio
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="Aportada"/> Aportada
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="Traslado"/> Traslado
                                </label>
                            </div>
                        </div>

                        <div class="row" style="padding-left: 15px">
                            <h4 style="width: 100%">Condiciones Ambientales</h4>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="Soleado"/>
                                    Soleado</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="Nublado"/>
                                    Nublado</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="Lluvioso"/>
                                    Lluvioso</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="Noche"/>
                                    Noche</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="No indica"/>
                                    No indica</label></div>
                        </div>

                        <div class="row" style="padding-left: 15px">
                            <h4>Condicion de la muestra</h4>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Contaminada"/>
                                    Contaminada</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="Natural"/>
                                    Natural</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Insuficiente"/>
                                    Insuficiente</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="No apto"/>
                                    No
                                    apto</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Muy húmeda"/>
                                    Muy húmeda</label></div>
                        </div>

                        <div class="row" style="padding-left: 15px">
                            <h4>Equipos y materiales utilizados</h4>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Pala manual"/>
                                    Pala manual</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Extractora"/>
                                    Extractora</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Equipo pesado"/>
                                    Equipo pesado</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Equipo concreto"/> Equipo
                                    concreto</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox"
                                                                                        id="Densímetro"/>
                                    Densímetro</label></div>
                            <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="Otro"/>
                                    Otro</label></div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <h2>Material Muestreado</h2>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Muestreo de Agregados</h3>
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
                        <div class=" col-sm-2">
                            <label class=" checkbox-inline">
                                <input type="checkbox" id="Flujo continuo de agregado"/> Flujo continuo de agregado
                            </label>
                        </div>
                        <div class=" col-sm-2 ">
                            <label class=" checkbox-inline">
                                <input type="checkbox" id="Banda transportadora"/> Banda transportadora
                            </label>
                        </div>
                        <div class=" col-sm-2">
                            <label class=" checkbox-inline">
                                <input type="checkbox" id="Apilamiento"/>
                                Apilamiento
                            </label>
                        </div>
                        <div class=" col-sm-2">
                            <label class=" checkbox-inline">
                                <input type="checkbox" id="Carreteras Tipo de material"/>
                                Carreteras Tipo de material
                            </label>
                        </div>
                        <div class=" col-sm-2">
                            <label class=" checkbox-inline">
                                <input type="checkbox" id="Unidades de transporte"/> Unidades de transporte
                            </label>
                        </div>
                        <div class=" col-sm-2">
                            <label class=" checkbox-inline">
                                <input type="checkbox" id="Otros"/>
                                Otros
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Concreto fresco o endurecido</h3>
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
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c51-Mezcla"/>
                                Mezcladora estacionaria: Cantidad </label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c52-Pavime"/>
                                Pavimentadora: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c53-Camión"/>
                                Camión mezclador: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c54-Núcleo"/>
                                Núcleos concreto: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c55-Varill"/>
                                Varillas de refuerzo (indicar número y cantidad en observaciones)</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c56-Agua p"/>
                                Agua para producción de concreto</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c57-Moldeo"/>
                                Moldeo de Cilindros: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c58-Resist"/>
                                Resistencia a los 28 d(kg/cm2):</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c59-Moldeo"/>
                                Moldeo de Vigas: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c60-Resist"/>
                                Resistencia a los 28 d(kg/cm2):</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c61-Moldeo"/>
                                Moldeo de Cubos: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c611-Resist"/>
                                Resistencia a los 28 d(kg/cm2):</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c62-Otros"/>
                                Otros</label></div>
                    </form>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Mezcla asfáltica</h3>
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
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c63-Ubicac"/>
                                Ubicación de la planta</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c64-Unidad"/>
                                Unpoidad de transporte ubicado en planta</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c65-Unidad"/>
                                Unidad de Transporte ubicado en sitio de colocación
                            </label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c66-Carret"/>
                                Carretera</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c67-Núcleo"/>
                                Núcleos MAC: Cantidad</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c68-Otros"/>
                                Otros</label></div>
                    </form>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Asfalto</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group" style="width:100%">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c69-Camión"/>
                                Camión</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c70-En tan"/> En
                                tanques de almacenaje</label></div>
                    </form>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Emulsión</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group" style="width:100%">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c75-Puntos"/>
                                Puntos de riego</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c76-En tan"/> En
                                tanques de almacenaje</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c77-Otros"/>
                                Otros</label></div>
                    </form>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Suelo</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group" style="width:100%">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c81-In sit"/> In
                                situ</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c82-DCP"/>
                                DCP</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c83-SPT"/>
                                SPT</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c84-Otros"/>
                                Otros</label></div>
                    </form>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Chequeos de compactación</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group" style="width:100%">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c87-Mezcla"/>
                                Mezcla Asfáltica: Fuente</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c88-Base: "/>
                                Base: Fuente</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c89-Subbas"/>
                                Subbase: Fuente</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c90-Base E"/>
                                Base Estabilizada: Fuente</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c91-Présta"/>
                                Préstamo: Fuente</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c92-Subras"/>
                                Subrasante: Fuente</label></div>
                        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c915-Otros"/>
                                Otros</label></div>

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
        <h4>Determinación de números aleatorios debido a que el muestreo es indicado por la inspección: </h4>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c99-Si"/> Si</label></div>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c100-N/A"/> N/A</label></div>
        <br>
        <h4>Método utilizado para los números aleatorios: </h4>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c105-Tabla"/> Tabla</label>
        </div>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c106-Calcul"/>
                Calculadora</label></div>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c107-Dados"/> Dados</label>
        </div>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c108-Aplica"/>
                Aplicación</label></div>
        <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" id="c109-N/A"/> N/A</label></div>


        <br><br>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">TITULO-FILA</h3>
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
                        <div id="fl1" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">Columna1</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID1"/>
                        </div>
                        <div id="fl2" style="display: flex; flex-direction: row; " class=" div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla"> Columna2</label>
                            <input style="float: right" type="text" class=" input-table  form-control" id="ID2"/>
                        </div>
                        <div id="fl3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla"> Columna3</label>
                            <input style="float: right" type="text" class=" input-table  form-control" id="ID3"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>


        <div class="box">
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
                                Tipo_de_Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
1"/>
                        </div>
                        <div id="cel2" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cantidad</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
2"/>
                        </div>
                        <div id="cel3" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Fila</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
3"/>
                        </div>
                        <div id="cel4" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Columna</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
4"/>
                        </div>
                        <div id="cel5" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
5"/>
                        </div>
                        <div id="cel6" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Resultado</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
6"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box">
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
                                Tipo_de_Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
21"/>
                        </div>
                        <div id="cel22" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cantidad</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
22"/>
                        </div>
                        <div id="cel23" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Fila</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
23"/>
                        </div>
                        <div id="cel24" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Columna</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
24"/>
                        </div>
                        <div id="cel25" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
25"/>
                        </div>
                        <div id="cel26" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Resultado</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
26"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box">
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
                                Tipo_de_Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
41"/>
                        </div>
                        <div id="cel42" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cantidad</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
42"/>
                        </div>
                        <div id="cel43" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Fila</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
43"/>
                        </div>
                        <div id="cel44" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Columna</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
44"/>
                        </div>
                        <div id="cel45" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
45"/>
                        </div>
                        <div id="cel46" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Resultado</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
46"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="box">
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
                                Tipo_de_Muestra</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
61"/>
                        </div>
                        <div id="cel62" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Cantidad</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
62"/>
                        </div>
                        <div id="cel63" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Fila</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
63"/>
                        </div>
                        <div id="cel64" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_Columna</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
64"/>
                        </div>
                        <div id="cel65" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                No._Aleatorio_</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
65"/>
                        </div>
                        <div id="cel66" style="display: flex; flex-direction: row; " class="div-tabla col-sm-4">
                            <label style="margin-top: auto; margin-bottom: auto; margin-right: 10px"
                                   class="label-tabla">
                                Resultado</label>
                            <input style="float: right" type="text" class="input-table form-control" id="ID
66"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <h4>Muestras mínimas</h4>
        <img src="vistas/img/res/tabla1.jpg">
        <br>
        <br>
        <img src="vistas/img/res/tabla2.jpg">
        <br>
        <br>
        <img src="vistas/img/res/img1.jpg">
        <br>

        <h1>FOMRULARIO CONCRETO FRESCO</h1>

        <div class="col-sm-2"><label for="v0">Descripcion de muestra::</label><br>
            <input type="text" class="form-control" id="v0" name="v0"></div>
        <div class="col-sm-2"><label for="v1">Fecha de Inicio:</label><br>
            <input type="text" class="form-control" id="v1" name="v1"></div>
        <div class="col-sm-2"><label for="v2">Hora de Inicio:</label><br>
            <input type="text" class="form-control" id="v2" name="v2"></div>
        <div class="col-sm-2"><label for="v3">Hora Fin::</label><br>
            <input type="text" class="form-control" id="v3" name="v3"></div>
        <div class="col-sm-2"><label for="v4">Fecha desmoldeo:</label><br>
            <input type="text" class="form-control" id="v4" name="v4"></div>
        <br><br>

        <br><br>

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

        <br><br>

        <div class="col-sm-2"><label for="v5">Origen del concreto:</label><br>
            <input type="text" class="form-control" id="v5" name="v5"></div>
        <div class="col-sm-2"><label for="v6">Resistencia del concreto (kg/cm2):</label><br>
            <input type="text" class="form-control" id="v6" name="v6"></div>


        <div class="box">
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
        "
        "
        <div class="box">
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
        "
        "
        <div class="box">
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
        "
        "
        <div class="box">
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
        "
        "
        <div class="box">
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
        "
        "
        <div class="box">
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
        "
        "
        <div class="box">
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
        "
        "
        <div class="box">
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


        <div class="col-sm-2"><label for="v7">Temperatura Campo Inicial:</label><br>
            <input type="text" class="form-control" id="v7" name="v7" placeholder="ºC"></div>
        <div class="col-sm-2"><label for="v8">Temperatura Campo Final:</label><br>
            <input type="text" class="form-control" id="v8" name="v8" placeholder="ºC"></div>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Codigos</h3>
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

        <div class="col-sm-2"><label for="v9">Técnico Responsible:</label><br>
            <input type="text" class="form-control" id="v9" name="v9"></div>


        <br><br><br>

        <div class="content-wrapper">
            <section class="content">

                <div class="box">

                    <div class="box-header with-border">

                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

                            Agregar cliente

                        </button>

                    </div>

                    <div class="box-body">

                        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                            <thead>

                            <tr>

                                <th style="width:10px">#</th>
                                <th>Nombre</th>
                                <th>C&eacute;dula</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Fecha de</th>
                                <th>Total cotizado</th>
                                <th>Última cotizaci&oacute;n</th>
                                <th>Ingreso al sistema</th>
                                <th>Acciones</th>

                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $item = null;
                            $valor = null;

                            $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                            foreach ($clientes as $key => $value) {


                                echo '<tr>

                    <td>' . ($key + 1) . '</td>

                    <td>' . $value["nombre"] . '</td>

                    <td>' . $value["documento"] . '</td>

                    <td>' . $value["email"] . '</td>

                    <td>' . $value["telefono"] . '</td>

                    <td>' . $value["direccion"] . '</td>

                    <td>' . $value["fecha_nacimiento"] . '</td>             

                    <td>' . $value["compras"] . '</td>

                    <td>' . $value["ultima_compra"] . '</td>

                    <td>' . $value["fecha"] . '</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="' . $value["id"] . '"><i class="fa fa-pencil"></i></button>';

                                if ($_SESSION["perfil"] == "Super Usuario") {

                                    echo '<button class="btn btn-danger btnEliminarCliente" idCliente="' . $value["id"] . '"><i class="fa fa-times"></i></button>';

                                }

                                echo '</div>  

                    </td>

                  </tr>';

                            }

                            ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


            <div class="field_wrapper">
                <div>
                    <input type="text" name="field_name[]" value=""/>
                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
                </div>
            </div>
        </div>

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title1</h3>
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
                        <div class="col-sm-2">
                            <label for="n1">Número de Muestra2:</label><br>
                            <input type="text" id="n0" name="n0"></div>
                        <div class="col-sm-2">
                            <label for="n1">Cantidad:</label>
                            <input type="text" id="n1" name="n1"></div>
                        <div class="col-sm-2">
                            <label for="n2">Recibido Por:</label>
                            <input type="text" id="n2" name="n2"></div>
                        <div class="col-sm-2">
                            <label for="n3">Fecha:</label>
                            <input type="text" id="n3" name="n3"></div>
                        <div class="col-sm-2">
                            <label for="n4">Hora:</label>
                            <input type="text" id="n4" name="n4"></div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                   aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">With textarea</span>
                            </div>
                            <input class="form-control" aria-label="With textarea"></input>
                        </div>
                        <button type="button" class="btn btn-info">Info</button>
                    </form>
                </div>
            </div>

        </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <form onsubmit="alert('Subscribed')" action="/action_page.php">
                        <div class="col-sm-2">
                            <label for="n1">Número de Muestra3:</label><br>
                            <input type="text" id="n0" name="n0"></div>
                        <div class="col-sm-2">
                            <label for="n1">Cantidad:</label>
                            <input type="text" id="n1" name="n1"></div>
                        <div class="col-sm-2">
                            <label for="n2">Recibido Por:</label>
                            <input type="text" id="n2" name="n2"></div>
                        <div class="col-sm-2">
                            <label for="n3">Fecha:</label>
                            <input type="text" id="n3" name="n3"></div>
                        <div class="col-sm-2">
                            <label for="n4">Hora:</label>
                            <input type="text" id="n4" name="n4"></div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                   aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">With textarea</span>
                            </div>
                            <input class="form-control" aria-label="With textarea"></input>
                        </div>
                        <button type="button" class="btn btn-info">Info</button>
                    </form>
                </div>
            </div>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
</div>
<!-- /.box -->


<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- CAJA VACIA REFERENCIA

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Title1</h3>
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


            </form>
        </div>
    </div>
</div>

-->