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
            <div id="btn" class="btn">
                <span class="fas fa-bars"></span>
            </div>
            <nav class="sidebar">
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
            </nav>


            <h5 class="card-header" id="tituloEncabezado"> <img class=".bg-light" id="imagenes" color="write"
                    src="\IHCAFE\GRAFICOSGENERALES\img\LogoIHCAFEactual.png">
                PRACTICAS RECOMENDADAS POR EL ANALISIS VULNERABILIDAD.</h5>


            <div class="card-body">



                <!-- con parametrossssssssssssssssssssssssssssssssssssssssssssd-->






                <div class="row">


                    <div class="col-lg-2">
                        <label for=""></label>
                        <p>
                            <input size="30" type="text" id="contador" readonly="readonly"></input>

                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-lg-5">

                        <canvas id="graficopolarArea_parametro" width="300" height="300"></canvas>
                        <!--<button class ="btn btn-primary" onclick="CargarDatosBarHorizontal()">grafico horizontal</button>-->

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
//CargarDatosBarHorizontal();


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






CargarDatosGraficoBar();

function CargarDatosGraficoBar() {

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
            CreaGraficoPrincipal(titulo, cantidad, colores, 'bar', 'GRAFICO DE BARRA',
                'graficopolarArea_parametro');
            // document.getElementById("graficobar").style.display="none";
            //document.getElementById("graficobarhorizontal").style.display="block";

        }


    })

}


function generarNumero(numero) {
    return (Math.random() * numero).toFixed(0);
}

function colorRGB() {
    var coolor = "(" + generarNumero(255) + "," + generarNumero(255) + "," + generarNumero(255) + ",0.5" + ")";
    return "rgb" + coolor;
}


////////////////////////////////////////////////////////////////////////////////
/////funciones para graficos con parametros









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





function CreaGraficoPrincipal(titulo, cantidad, colores, tipo, encabezado, id) {

    var ctx = document.getElementById(id).getContext('2d');
    var myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: titulo
            ,
            datasets: [{
                    label: encabezado,
                    data: cantidad ,
                   
                
                    backgroundColor: colores,
                    borderColor: colores,
                    borderWidth: 1,
                

                }


            ]
        },
        options: {
            responsive: true,



        
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
           
            tooltips: {
                    callbacks: {
                        label: (tooltipItem, data) => {
                            let ds = data.datasets[tooltipItem.datasetIndex];
                            return ds.label + ':: ' + ds.data[tooltipItem.index];
                        }
                    }



                }
        



        },


    });

}
</script>