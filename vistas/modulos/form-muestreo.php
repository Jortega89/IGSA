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
        <br><br>


        <h4>Muestras mínimas</h4>
        <img class="img-responsive" src="vistas/img/res/tabla1.jpg">
        <br>
        <br>
        <img class="img-responsive" src="vistas/img/res/tabla2.jpg">
        <br>
        <br>
        <img class="img-responsive" src="vistas/img/res/img1.jpg">
        <br>


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