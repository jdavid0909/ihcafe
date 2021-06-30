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
                        <select name="" id="select_agencia" class="form-control">
                            <option Selected Disabled>Seleccione el Departamento</option>
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
                    <div class="col-lg-6">

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

function CargarGraficosParametros() {


    if (window.myChart) { //verificar el camvas si esta lleno o vacio para borrar y no se monte las graficas viejas
        window.myChart.clear();
        window.myChart.destroy();
        CargarDatosGraficoPolar();

    CargarDatosTotales();
    }else{
        CargarDatosGraficoPolar();

    CargarDatosTotales();
    }
    


}


function CargarDatosGraficoPolar() {
    var anoinicio = $("#fecha_inicio").val();
    var anofinal = $("#fecha_final").val();
     var agencia = $("#select_agencia").val();
    var regional = $("#select_regional").val();
    
    var porFecha = agencia+regional;
    if (porFecha == '') {
        $.ajax({
            url: 'controlador_grafico_parametro_fecha.php',
            type: 'POST',
            data: {
                anoinicio: anoinicio,
                anofinal: anofinal

                
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

                CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                    'graficopolarArea_parametro');



            }


        })


    }
    
 if (regional !== '') {
        $.ajax({
            url: 'controlador_grafico_parametro_regional.php',
            type: 'POST',
            data: {
                anoinicio: anoinicio,
                anofinal: anofinal,
                regional:regional

                
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

                CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                    'graficopolarArea_parametro');



            }


        })


    }
    if (agencia !== '') {
        $.ajax({
            url: 'controlador_grafico_parametro_agencia.php',
            type: 'POST',
            data: {
                anoinicio: anoinicio,
                anofinal: anofinal,
                agencia:agencia

                
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

                CreaGrafico(titulo, cantidad, colores, 'bar', 'grafico de polar',
                    'graficopolarArea_parametro');



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



function CargarDatosTotales() {
    var anoinicio = $("#fecha_inicio").val();
    var anofinal = $("#fecha_final").val();
    
    
    var agencia = $("#select_agencia").val();
  
    var regional = $("#select_regional").val();
    
    var porFecha =  agencia +regional;
    if (porFecha == '') {
        $.ajax({
            url: 'controlador_totales_fecha.php',
            type: 'POST',
            data: {
                anoinicio: anoinicio,
                anofinal: anofinal
                
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
                anoinicio: anoinicio,
                anofinal: anofinal,
                regional: regional
                
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
    if (agencia != '') {
        $.ajax({
            url: 'controlador_totales_agencia.php',
            type: 'POST',
            data: {
                anoinicio: anoinicio,
                anofinal: anofinal,
                agencia: agencia
                
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



function CreaGrafico(titulo, cantidad, colores, tipo, encabezado, id) {

    var ctx = document.getElementById(id).getContext('2d');
    window.myChart = new Chart(ctx, {
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