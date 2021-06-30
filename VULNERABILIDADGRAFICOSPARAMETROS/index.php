<!DOCTYPE html>
<!-- ver darton minunuto 4horas y 51min -->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
    <!-- css para grafico -->

    <title>GRAFICOS PRUEBAS</title>

    <!--mi css-->

    <link href="CSS/ESTILOS.css" rel="stylesheet" type="text/css" />

</head>


<body>

    <div class="col-lg-12" style="padding-top:20px;">

        <div class="card">

            <h5 class="card-header" id="tituloEncabezado"> <img class=".bg-light" id="imagenes" color="write"
                    src="\IHCAFE\GRAFICOSGENERALES\img\LogoIHCAFEactual.png">
                GRAFICOS DE FICHA VULNERABILIDAD POR FILTROS.</h5>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="">Fecha Inicial</label>
                        <p>
                            <input class="form-control" type="date" id="fecha_inicio" min="2018-01-01" max="2022-12-31"
                                value="2018-01-01" />
                    </div>

                    <div class="col-lg-3">
                        <label for="">Año Final</label>
                        <p>
                            <input class="form-control" type="date" id="fecha_final" min="2018-01-01"
                                max="2022-12-31" />
                    </div>

                    <div class="col-lg-3">
                        <label for=""></label>
                        <select name="" id="select_evento" class="form-control">

                            <option value="factores de exposicion">Factores de exposición</option>
                            <option value="factores de impacto">Factores de Impacto</option>
                            <option value="factores de adaptabilidad">Factores de Adaptabilidad</option>
                            <option Selected Disabled>Seleccione el Evento</option>

                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for=""></label>
                        <select name="" id="select_departamento" class="form-control">

                            <option value="1">ATLANTIDA</option>
                            <option value="2">COLÓN</option>
                            <option value="3">COMAYAGUA</option>
                            <option value="4">COPÁN</option>
                            <option value="5">CORTES</option>
                            <option value="6">CHOLUTECA</option>
                            <option value="7">EL PARAISO</option>
                            <option value="8">FRANCISCO MORAZÁN</option>
                            <option value="9">GRACIAS A DIOS</option>
                            <option value="10">INTIBUCA</option>
                            <option value="11">ISLA DE LA BAHIA</option>
                            <option value="12">LA PAZ</option>
                            <option value="13">LEMPIRA</option>
                            <option value="14">OCOTEPEQUE</option>
                            <option value="15">OLANCHO</option>
                            <option value="16">SANTA BARBARA</option>
                            <option value="17">VALLE</option>
                            <option value="18">YORO</option>
                            <option Selected Disabled>Seleccione el Departamento</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label for=""></label>
                        <select name="" id="select_agencia" class="form-control">
                            <option Selected Disabled>Seleccione el Departamento</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for=""></label>
                        <select name="" id="select_tecnicos" class="form-control">
                            <option Selected Disabled>Seleccione el Departamento</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label for=""></label>
                        <select name="" id="select_regional" class="form-control">

                            <option value="1">Regional Santa Barbara</option>
                            <option value="2">Regional Copan</option>
                            <option value="3">Regional Cortes - Yoro</option>
                            <option value="4">Regional El Paraiso</option>
                            <option value="5">Regional Comayagua</option>
                            <option value="6">Regional Olancho</option>
                            <option value="7">Regional Centro Sur</option>

                            <option Selected Disabled>Seleccione la Regional</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for=""></label>
                        <select name="" id="select_genero" class="form-control">

                            <option value="1">MASCULINO</option>
                            <option value="2">FEMENINO</option>


                            <option Selected Disabled>Seleccione el Genero</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label for="">&nbsp;</label>
                        <p>
                            <button class="btn btn-danger" id="btnBuscar"
                                onclick="CargarGraficosParametros()">buscar</button>

                    </div>
                    <div class="row justify-content-end">

                        <div class="col-lg-3">

                            <label for=""></label>
                            <input class="" id="contador1" readonly="readonly"></input>
                        </div>
                    </div>




                </div>


                <div class="d-flex justify-content-center">
                    <div class="col-lg-5">

                        <canvas id="graficopolarArea_parametro" width="500" height="500"></canvas>
                        <!--<button class ="btn btn-primary" onclick="CargarDatosBarHorizontal()">grafico horizontal</button>-->

                    </div>

                </div>


            </div>

        </div>
    </div>
    </div>






</body>


</html>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

<script>
function generarNumero(numero) {
    return (Math.random() * numero).toFixed(0);
}

function colorRGB() {
    var coolor = "(" + generarNumero(255) + "," + generarNumero(255) + "," + generarNumero(255) + ",0.5" + ")";
    return "rgb" + coolor;
}


////////////////////////////////////////////////////////////////////////////////
/////funciones para graficos con parametros

CargarDatosAgencia();
CargarDatosTecnico()

function CargarGraficosParametros() {


    if (window.myChart) { //verificar el camvas si esta lleno o vacio para borrar y no se monte las graficas viejas
        window.myChart.clear();
        window.myChart.destroy();
    }
    CargarDatosGraficoPolar();

    CargarDatosTotales();


}



function CargarDatosGraficoPolar() {
    var fechaAnoInicio = $("#fecha_inicio").val();
    var fechaAñoFinal = $("#fecha_final").val();
    var fechaMesInicio = $("#select_mes_inicial").val();
    var fechaMesFinal = $("#select_mes_final").val();
    var departamento = $("#select_departamento").val();
    var evento = $("#select_evento").val();
    var agencia = $("#select_agencia").val();
    var tecnico = $("#select_tecnicos").val();
    var regional = $("#select_regional").val();
    var genero = $("#select_genero").val();
    var porFecha = tecnico + agencia + departamento + regional + genero;
    if (porFecha == '') {
        $.ajax({
            url: 'controlador_grafico_parametro_fecha.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,

                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                if (evento != 'factores de adaptabilidad') {
                    CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                } else {
                    //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                    CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                    var camvaPara = document.getElementById("graficopolarArea_parametro");
                    // camvaPara.width="800" ;
                    //camvaPara.height="600";
                    //width="600" height="500"

                }

            }


        })


    }
    if (agencia != '') {
        $.ajax({
            url: 'controlador_grafico_parametro_agencia.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                agencia: agencia,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                if (evento != 'factores de adaptabilidad') {
                    CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                } else {
                    //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                    CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                    var camvaPara = document.getElementById("graficopolarArea_parametro");
                    // camvaPara.width="800" ;
                    //camvaPara.height="600";
                    //width="600" height="500"

                }

            }


        })

    }

    if (departamento != '') {

        $.ajax({
            url: 'controlador_grafico_parametro.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                departamento: departamento,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                if (evento != 'factores de adaptabilidad') {
                    CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                } else {
                    //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                    CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                    var camvaPara = document.getElementById("graficopolarArea_parametro");
                    // camvaPara.width="800" ;
                    //camvaPara.height="600";
                    //width="600" height="500"

                }

            }


        })
    }
    if (tecnico != '') {



        $.ajax({
            url: 'controlador_grafico_parametro_tecnico.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                tecnico: tecnico,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                if (evento != 'factores de adaptabilidad') {
                    CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                } else {
                    //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                    CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                    var camvaPara = document.getElementById("graficopolarArea_parametro");
                    // camvaPara.width="800" ;
                    //camvaPara.height="600";
                    //width="600" height="500"

                }

            }


        })
    }
    if (regional != '') {



        $.ajax({
            url: 'controlador_grafico_parametro_regional.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                regional: regional,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                if (evento != 'factores de adaptabilidad') {
                    CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                } else {
                    //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                    CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                    var camvaPara = document.getElementById("graficopolarArea_parametro");
                    // camvaPara.width="800" ;
                    //camvaPara.height="600";
                    //width="600" height="500"

                }

            }


        })
    }
    if (genero != '') {
        $.ajax({
            url: 'controlador_grafico_parametro_genero.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                genero: genero,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                if (evento != 'factores de adaptabilidad') {
                    CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                } else {
                    //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                    CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                        'graficopolarArea_parametro');

                    var camvaPara = document.getElementById("graficopolarArea_parametro");
                    // camvaPara.width="800" ;
                    //camvaPara.height="600";
                    //width="600" height="500"

                }

            }


        })

    }



}

function CargarDatosAgencia() {
    select = document.getElementById("select_agencia");
    var cadena = ";"
    $.ajax({
        url: 'controlador_agencia.php',
        type: 'POST',
    }).done(function(resp) {
        if (resp.length > 0) {
            var titulo = [];
            var cantidad = [];
            var data = JSON.parse(resp);

            for (var i = 0; i < data.length; i++) {
                cadena += "<option value=" + data[i][0] + ">" + data[i][0] + "-" + data[i][1] + "</option>";
            }
            cadena2 = "<option Selected Disabled>Seleccione una Agencia</option>";
        }
        $("#select_agencia").html(cadena + cadena2);
    })

}

function CargarDatosTecnico() {
    select = document.getElementById("select_tecnicos");
    var cadena = ";"
    $.ajax({
        url: 'controlador_tecnicos.php',
        type: 'POST',
    }).done(function(resp) {
        if (resp.length > 0) {
            var titulo = [];
            var cantidad = [];
            var data = JSON.parse(resp);

            for (var i = 0; i < data.length; i++) {
                cadena += "<option value=" + data[i][0] + ">" + data[i][0] + "-" + data[i][1] + "</option>";
            }
            cadena2 = "<option Selected Disabled>Seleccione un Tecnico</option>";
        }
        $("#select_tecnicos").html(cadena + cadena2);
    })

}


function CargarDatosTotales() {
    var fechaAnoInicio = $("#fecha_inicio").val();
    var fechaAñoFinal = $("#fecha_final").val();
    var fechaMesInicio = $("#select_mes_inicial").val();
    var fechaMesFinal = $("#select_mes_final").val();
    var departamento = $("#select_departamento").val();
    var evento = $("#select_evento").val();
    var agencia = $("#select_agencia").val();
    var tecnico = $("#select_tecnicos").val();
    var regional = $("#select_regional").val();
    var genero = $("#select_genero").val();
    var porFecha = tecnico + agencia + departamento + regional + genero;

    if (porFecha == '') {
        $.ajax({
            url: 'controlador_totales.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,

                evento: evento
            }
        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(resp);

                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                }
                enviar(titulo, cantidad);
            }
        })
    }
    if (agencia != '') {
        $.ajax({
            url: 'controlador_totales_Agencia.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                agencia: agencia,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                enviar(titulo, cantidad);

            }


        })

    }
    if (departamento != '') {

        $.ajax({
            url: 'controlador_totales_departamento.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                departamento: departamento,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                enviar(titulo, cantidad);

            }


        })
    }
    if (tecnico != '') {
        $.ajax({
            url: 'controlador_totales_tecnico.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                tecnico: tecnico,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                enviar(titulo, cantidad);

            }


        })
    }
    if (regional != '') {



        $.ajax({
            url: 'controlador_totales_regional.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                regional: regional,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                enviar(titulo, cantidad);


            }


        })
    }
    if (genero != '') {



        $.ajax({
            url: 'controlador_totales_genero.php',
            type: 'POST',
            data: {
                anoInicio: fechaAnoInicio,
                anoFinal: fechaAñoFinal,
                mesInicio: fechaMesInicio,
                mesFinal: fechaMesFinal,
                genero: genero,
                evento: evento
            }

        }).done(function(resp) {
            if (resp.length > 0) {
                var titulo = [];
                var cantidad = [];
                var colores = [];
                var data = JSON.parse(resp);
                for (var i = 0; i < data.length; i++) {
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
                enviar(titulo, cantidad);


            }


        })
    }

}


function enviar(titulo, cantidad) { //no esta en uso

    document.getElementById("contador1").value = titulo + cantidad;
}


//////////////////////////////////crear grafico
function CreaGraficoAdaptabilidad(titulo, cantidad, colores, tipo, encabezado, id) {
    var ctx = document.getElementById(id).getContext('2d');
    window.myChart = new Chart(ctx, {
            type: tipo,

            data: {

                labels: [titulo[2], titulo[5], titulo[8], titulo[11], titulo[14], titulo[17], titulo[20],
                    titulo[
                        23],
                    titulo[26], titulo[29], titulo[32], titulo[35], titulo[38]
                ],
                datasets: [{
                        label: ['Hay Impacto'],
                        data: [cantidad[2], cantidad[5], cantidad[8], cantidad[11], cantidad[14], cantidad[
                                17],
                            cantidad[20], cantidad[23], cantidad[26], cantidad[29], cantidad[32],
                            cantidad[
                                35], cantidad[38]
                        ],
                        backgroundColor: '#ED7E30',
                        borderColor: '#ED7E30',
                        borderWidth: 1
                    }, {

                        label: 'No es perceptible',
                        data: [cantidad[1], cantidad[4], cantidad[7], cantidad[10], cantidad[13], cantidad[
                                16],
                            cantidad[19], cantidad[22], cantidad[25], cantidad[28], cantidad[31],
                            cantidad[
                                34], cantidad[37]
                        ],
                        backgroundColor: '#FFC100',
                        borderColor: '#FFC100',
                        //hoverBackgroundColor:'red',
                        borderWidth: 1
                    }, {
                        label: 'NO hay Impacto',
                        data: [cantidad[0], cantidad[3], cantidad[6], cantidad[9], cantidad[12], cantidad[
                                15],
                            cantidad[18], cantidad[21], cantidad[24], cantidad[27], cantidad[30],
                            cantidad[
                                33], cantidad[36]
                        ],
                        backgroundColor: '#70AD46',
                        borderColor: '#70AD46',
                        //hoverBackgroundColor:'red',
                        borderWidth: 1


                    }

                ]
            },
            options: {

                responsive: true,
                tooltips: {

                    mode: 'index',


                },

                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true


                        }
                    }]


                },




            },


        }


    );

}

function CreaGrafico(titulo, cantidad, colores, tipo, encabezado, id) {


    //  cantidad[9], cantidad[12], cantidad[15]
    var ctx = document.getElementById(id).getContext('2d');
    window.myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: [titulo[2], titulo[5], titulo[8], titulo[11], titulo[14], titulo[17]],
            datasets: [{
                    label: ['Hay Impacto'],
                    data: [cantidad[2], cantidad[5], cantidad[8], cantidad[11], cantidad[14], cantidad[
                        17]],
                    backgroundColor: 'rgb(255, 106, 0)',
                    borderColor: '#ED7E30',
                    borderWidth: 1
                }, {

                    label: 'No es perceptible',
                    data: [cantidad[1], cantidad[4], cantidad[7], cantidad[10], cantidad[13], cantidad[
                        16]],
                    backgroundColor: '#FFC100',
                    borderColor: '#FFC100',
                    //hoverBackgroundColor:'red',
                    borderWidth: 1
                }, {
                    label: 'NO hay Impacto',
                    data: [cantidad[0], cantidad[3], cantidad[6], cantidad[9], cantidad[12], cantidad[
                        15]],
                    backgroundColor: '#70AD46',
                    borderColor: '#70AD46',
                    //hoverBackgroundColor:'red',
                    borderWidth: 1


                }

            ]
        },
        options: {

            responsive: true,
            tooltips: {
                mode: 'index',

            },
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true,
                    ticks: {
                        beginAtZero: true


                    }
                }]


            }
        },


    });
}



function CreaGraficoPrincipal(titulo, cantidad, colores, tipo, encabezado, id) {

    var ctx = document.getElementById(id).getContext('2d');
    var myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: titulo,
            datasets: [{
                label: [encabezado],
                data: cantidad,
                backgroundColor: colores,
                borderColor: colores,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        },


    });
}
</script>