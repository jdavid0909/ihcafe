<!DOCTYPE html>

<html lang="en" dir="ltr">

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
    <!-- <link href="CSS/estilos.css" rel="stylesheet" type="text/css" />
    <link href="css/estilos.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="css/style.css">
    <!--para el menu -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>


<body>




    <div class="col-lg-17" style="padding-top:10px; ">


        <div class="card">
            
            <nav class="sidebar">
                <div id="btn" class="btn">
                    <span class="fas fa-bars"></span>
                </div>
                <div class="sidebar__menu">
        
                <div class="text">
                    Side Menu
                </div>
                <ul>
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li>
                        <a href="#" class="feat-btn">VULNERABILIDAD
                            <span class="fas fa-caret-down first"></span>
                        </a>
                        <ul class="feat-show">
                            <li><a href="http://localhost/IHCAFE/GRAFICOSGENERALES/#">GLOBALES</a></li>
                            <li><a href="http://localhost/IHCAFE/GRAFICOSGENERALES2/#">PARAMETROS</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="serv-btn">SECCION2
                            <span class="fas fa-caret-down second"></span>
                        </a>
                        <ul class="serv-show">
                            <li><a href="#">App Design</a></li>
                            <li><a href="#">Web Design</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SECCION3</a></li>
                    <li><a href="#">SECCION4</a></li>
                    <li><a href="#">SECCION5</a></li>
                    <li><a href="#">SECCION6</a></li>
                </ul>
                </div>
            </nav>


            <h5 class="card-header" id="tituloEncabezado"> <img class=".bg-light" id="imagenes" color="write"
                    src="\IHCAFE\GRAFICOSGENERALES\img\LogoIHCAFEactual.png">
                GRAFICA DE FICHAS DE VULNERABILIDAD CLIMATICA GENERAL.</h5>
                

            <div class="card-body">

                <div class="d-flex justify-content-center">


                    <div  class="col-lg-5" id="graficasGenerales">
                        <canvas id="graficobar" width="400" height="400"></canvas>
                        <!--<button class ="btn btn-primary" onclick="CargarDatosBar()">grafico bar</button>-->
                    </div>






                </div>
            </div>
            <!-- con parametrossssssssssssssssssssssssssssssssssssssssssssd-->
            <div class="card">

                <h5 class="card-header">GRAFICOS DE FICHA VULNERABILIDAD POR EVENTO</h5>
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-3">
                            <label for=""></label>
                            <select name="" id="select_evento" class="form-control">

                                <option value="Factores de exposicion">Factores de Exposición</option>
                                <option value="factores de impacto">Factores de Impacto</option>
                                <option value="factores de adaptabilidad">Factores de Adaptabilidad</option>
                                <option Selected Disabled>Seleccione el Evento</option>

                            </select>
                        </div>


                        <div class="col-lg-2">
                            <label for="">&nbsp;</label>
                            <p>
                                <button class="botonPersonalizado" id="btnBuscar"
                                    onclick="CargarGraficosParametros()">buscar</button>
                        </div>

                        <div class="col-lg-2">
                            <label for=""></label>
                            <p>
                                <input size="30" type="text" id="contador" readonly="readonly"></input>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-7">

                            <canvas id="graficopolarArea_parametro" width="600" height="500"></canvas>
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
CargarDatosBar();
//CargarDatosBarHorizontal();
//CargarDatosGraficoPie();

$('.btn').click(function() {
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
});
$('.feat-btn').click(function() {
    $('nav ul .feat-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});
$('.serv-btn').click(function() {
    $('nav ul .serv-show').toggleClass("show1");
    $('nav ul .second').toggleClass("rotate");
});
$('nav ul li').click(function() {
    $(this).addClass("active").siblings().removeClass("active");
});


function CargarDatosBar() {
    $.ajax({
        url: 'controlador_grafico.php',
        type: 'POST'

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

            CreaGraficoPrincipal(titulo, cantidad, colores, 'bar', 'grafico en barra vertical', 'graficobar');
            // document.getElementById("graficobarhorizontal").style.display="none";
            //document.getElementById("graficobar").style.display="block";
        }
    })

}




function generarNumero(numero) {
    return (Math.random() * numero).toFixed(0);
}

function colorRGB() {
    var coolor = "(" + generarNumero(255) + "," + generarNumero(255) + "," + generarNumero(255) + ")";
    return "rgb" + coolor;
}


////////////////////////////////////////////////////////////////////////////////
/////funciones para graficos con parametros
TraerAnio();

function CargarGraficosParametros() {


    if (window.myChart) { //verificar el camvas si esta lleno o vacio para borrar y no se monte las graficas viejas
        window.myChart.clear();
        window.myChart.destroy();
    }

    CargarDatosGraficoPolar();





    CargarDatosTotales();
    //CargarDatosTotales()
}



function TraerAnio() {
    var mifecha = new Date();
    var anio = mifecha.getFullYear();
    var cadena = ";"
    // alert(anio)
    for (var i = 2015; i < anio + 1; i++) {
        cadena += "<option value=" + i + ">" + i + "</option>";

    }
    var cadena2 = ";"
    cadena2 = "<option Selected Disabled>Seleccione año inicial</option>";
    cadena3 = "<option Selected Disabled>Seleccione año final</option>";
    $("#select_fano").html(cadena + cadena2);
    $("#select_fano_final").html(cadena + cadena3);

}


function CargarDatosGraficoPolar() {
    var fechaAnoInicio = $("#select_fano").val();
    var fechaAñoFinal = $("#select_fano_final").val();
    var fechaMesInicio = $("#select_mes_inicial").val();
    var fechaMesFinal = $("#select_mes_final").val();
    var departamento = $("#select_departamento").val();
    var evento = $("#select_evento").val();



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
                CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar', 'graficopolarArea_parametro');

                // document.getElementById("graficobar").style.display="none";
                //document.getElementById("graficobarhorizontal").style.display="block";
            } else {
                //llamar al nueva funcion para adaptabilidad ya que son mas de 6 preguntas
                CreaGraficoAdaptabilidad(titulo, cantidad, colores, 'bar', 'grafico de polar',
                    'graficopolarArea_parametro');
                // x.width = "800";
                // x.height = "600";
            }

        }


    })

}




function CargarDatosTotales() {


    $.ajax({
        url: 'controlador_totales.php',
        type: 'POST',


    }).done(function(resp) {
        if (resp.length > 0) {
            var titulo = [];
            var cantidad = [];

            var data = JSON.parse(resp);
            for (var i = 0; i < data.length; i++) {
                titulo.push(data[i][0]);
                cantidad.push(data[i][1]);


            }
            //$("#hola").html('oo');

            //document.getElementById("hola").value='titulo';


            enviar(titulo, cantidad);
            // document.getElementById("graficobar").style.display="none";
            //document.getElementById("graficobarhorizontal").style.display="block";

        }


    })

}


function enviar(titulo, cantidad) { //no esta en uso

    document.getElementById("contador").value = titulo + cantidad;
}
//////////////////////////////////crear grafico

function CreaGraficoAdaptabilidad(titulo, cantidad, colores, tipo, encabezado, id) {

    var ctx = document.getElementById(id).getContext('2d');



    window.myChart = new Chart(ctx, {
            type: tipo,

            data: {

                labels: [titulo[0], titulo[3], titulo[6], titulo[9], titulo[12], titulo[15], titulo[18], titulo[21],
                    titulo[24], titulo[27], titulo[30], titulo[33], titulo[36]
                ],
                datasets: [{
                        label: ['Hay Impacto'],
                        data: [cantidad[0], cantidad[3], cantidad[6], cantidad[9], cantidad[12], cantidad[15],
                            cantidad[18], cantidad[21], cantidad[24], cantidad[27], cantidad[30], cantidad[
                                33], cantidad[36]
                        ],
                        backgroundColor: '#ED7E30',
                        borderColor: '#ED7E30',
                        borderWidth: 1
                    }, {

                        label: 'No es perceptible',
                        data: [cantidad[2], cantidad[5], cantidad[8], cantidad[11], cantidad[14], cantidad[17],
                            cantidad[20], cantidad[23], cantidad[26], cantidad[29], cantidad[32], cantidad[
                                35], cantidad[38]
                        ],
                        backgroundColor: '#FFC100',
                        borderColor: '#FFC100',
                        //hoverBackgroundColor:'red',
                        borderWidth: 1
                    }, {
                        label: 'NO hay Impacto',
                        data: [cantidad[1], cantidad[4], cantidad[7], cantidad[10], cantidad[13], cantidad[16],
                            cantidad[19], cantidad[22], cantidad[25], cantidad[28], cantidad[31], cantidad[
                                34], cantidad[37]
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


                }
            },


        }


    );

}

function CreaGrafico(titulo, cantidad, colores, tipo, encabezado, id) {

    var ctx = document.getElementById(id).getContext('2d');



    window.myChart = new Chart(ctx, {
            type: tipo,

            data: {

                labels: [titulo[0], titulo[3], titulo[6], titulo[9], titulo[12], titulo[15]],
                datasets: [{
                        label: ['Hay Impacto'],
                        data: [cantidad[0], cantidad[3], cantidad[6], cantidad[9], cantidad[12], cantidad[15]],
                        backgroundColor: '#ED7E30',
                        borderColor: '#ED7E30',
                        borderWidth: 1
                    }, {

                        label: 'No es perceptible',
                        data: [cantidad[2], cantidad[5], cantidad[8], cantidad[11], cantidad[14], cantidad[17]],
                        backgroundColor: '#FFC100',
                        borderColor: '#FFC100',
                        //hoverBackgroundColor:'red',
                        borderWidth: 1
                    }, {
                        label: 'NO hay Impacto',
                        data: [cantidad[1], cantidad[4], cantidad[7], cantidad[10], cantidad[13], cantidad[16]],
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


        }


    );

}


function CreaGraficoPrincipal(titulo, cantidad, colores, tipo, encabezado, id) {

    var ctx = document.getElementById(id).getContext('2d');
    var myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: [titulo[1], titulo[3]],
            datasets: [{
                label: 'recolectadas',
                data: [cantidad[1], cantidad[3]],
                backgroundColor: '#70AD46',
                borderColor: '#70AD46',
                borderWidth: 1
                
            },
            {
               
                label: 'faltante',
                data: [cantidad[0], cantidad[2]],
                backgroundColor: '#b36',
                borderColor: '#b36',
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
</script>