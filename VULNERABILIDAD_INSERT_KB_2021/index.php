<!DOCTYPE html>

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
     <link href="CSS/estilos.css" rel="stylesheet" type="text/css" /> 
    <!-- <link href="css/estilos.css" rel="stylesheet" type="text/css" /> -->
   <!-- // <link rel="stylesheet" href="style.css"> -->
    <!--para el menu -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>


<body>

    <div class="col-lg-12" style="padding-top:20px;">

        <div class="card">

            <h5 class="card-header" id="tituloEncabezado"> <img class=".bg-light" id="imagenes" color="write"
                    src="img/LogoIHCAFEactual.png">
                UPDATE.</h5>
            <div class="card-body">


            </div>
            <!-- con parametrossssssssssssssssssssssssssssssssssssssssssssd-->
            <div class="card">

                <h5 class="card-header">kb</h5>
                <div class="card-body">


                    <div class="row">



                        <div class="col-lg-2">
                            <label for="">&nbsp;</label>
                            <p>
                                <button class="btn btn-danger" id="btnBuscar" onclick="traerApi()">koboltoolbox 2021</button>
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
function traerApi() {
    //llamar 2 o mas funciones

    $.ajax({
        url: './apiphp.php'

    })

}



</script>