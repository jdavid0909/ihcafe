

<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"  />  <!-- css para grafico -->
    
    <title>GRAFICOS PRUEBAS</title>

    <!--mi css-->
    <link href="css/estilos.css" rel ="stylesheet" type="text/css"/>
    
  </head>

  
  <body>
  <div class="col-lg-12" style="padding-top:20px;">
      <div class="card">
      <h5 class="card-header">GRAFICA DE FICHAS DE VULNERABILIDAD CLIMATICA GENERAL.</h5>
      <div class="card-body">
    <!--  <h5 class="card-title">Special title treatment</h5>
     // <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
     -->
     <div class="row">
        <div class ="col-lg-5">
        <canvas id="graficobar" width="400" height="400"></canvas>
          <!--<button class ="btn btn-primary" onclick="CargarDatosBar()">grafico bar</button>-->
        </div>
        <div class ="col-lg-5">
        <canvas id="graficopie" width="400" height="400"></canvas>
        </div>


        </div>
      
        </div>
        <!-- con parametrossssssssssssssssssssssssssssssssssssssssssssd-->
         <div class="card">
        <h5 class="card-header">GRAFICOS DE FICHA VULNERABILIDAD POR EVENTO</h5>
       <div class="card-body">

           <!--  <h5 class="card-title">Special title treatment</h5>
        // <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        -->
      <div class="row">
     <div class ="col-lg-3">
     
    <label for="val">Año inicio</label>
    <p>
     <input type="range" id="select_fano" name="select_fano" min="2019" max="2025" step="1" value="25"
     onchange="document.getElementById('outvol').value=value" list="tickmarks">
     <output id="outvol" nam="outvol" for="vol">2019</output>
      <datalist id="tickmarks">
      <option value="2019">
      <option value="2020">
      <option value="2021">
      <option value="2022">
      <option value="2023">
      <option value="2024" >
      <option value="2025">   
    </datalist>
</div>

     <!--   <label for=""></label>
        <select name="" id="select_fano" class="form-control">
        
        </select>
    
     </div>-->

    

     <div class ="col-lg-3">
    <!-- <label for=""></label>
        <select name="" id="select_fano_final" class="form-control"></select>-->
        <label for="">Año final</label>
        <p>
     <input type="range" id="select_fano_final" name="select_fano_final" min="2019" max="2025" step="1" value="25"
     onchange="document.getElementById('outvol2').value=value" list="tickmarks">
     <output id="outvol2" nam="outvol2" for="vol2">2019</output>
      <datalist id="tickmarks">
      <option value="2019">
      <option value="2020">
      <option value="2021">
      <option value="2022">
      <option value="2023">
      <option value="2024" >
      <option value="2025">   
    </datalist>
     </div>
     
     

     <div class ="col-lg-3">
     <label for=""></label>
     <select name="" id="select_mes_inicial" class="form-control">
      <option value="01">ENERO</option>
      <option value="02">FEBRERO</option>
      <option value="03">MARZO</option>
      <option value="04">ABRIL</option>
      <option value="05">MAYO</option>
      <option value="06">JUNIO</option>
      <option value="07">JULIO</option>
      <option value="08">AGOSTO</option>
      <option value="09">SEPTIEMBRE</option>
      <option value="10">OBTUBRE</option>
      <option value="11">NOVIEMBRE</option>
      <option value="12">DICIEMBRE</option>
      <option Selected Disabled>Seleccione Mes inicio</option>
      </select>
     </div>
     
     <div class ="col-lg-2">
     <label for=""></label><p>
     
     <input size="30" type="text"  id="hola"  readonly="readonly"></input>
     </div>

    <div class="row">
    
     <div class ="col-lg-3">
     <label for=""></label>
     <select name="" id="select_mes_final" class="form-control">
     
     <option value="01">ENERO</option>
      <option value="02">FEBRERO</option>
      <option value="03">MARZO</option>
      <option value="04">ABRIL</option>
      <option value="05">MAYO</option>
      <option value="06">JUNIO</option>
      <option value="07">JULIO</option>
      <option value="08">AGOSTO</option>
      <option value="09">SEPTIEMBRE</option>
      <option value="10">OBTUBRE</option>
      <option value="11">NOVIEMBRE</option>
      <option value="12">DICIEMBRE</option>
      <option Selected Disabled>Seleccione mes final</option>
      
     
     </select>
     
     </div>
     <div class ="col-lg-3">
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
     
     <div class ="col-lg-3">
     <label for=""></label>
        <select name="" id="select_evento" class="form-control">
        
        <option value="factores de exposicion">Factores de exposición</option>
        <option value="EVENTO2">EVENTO2</option>
        <option Selected Disabled>Seleccione el Evento</option>
        
        </select>
     </div>
     
     <div class ="col-lg-2">
     <label for="">&nbsp;</label><p>
     <button class="btn btn-danger" onclick="CargarGraficosParametros()">buscar</button>
     </div>

     
     
     <!--
        <div class ="col-lg-4">
        <canvas id="graficodoughnut_parametro" width="400" height="400"></canvas>
          <--<button class ="btn btn-primary" onclick="CargarDatosBar()">grafico bar</button>-->
        <!--</div>>-->
        <div class ="col-lg-5">
        <canvas id="graficopolarArea_parametro" width="500" height="500"></canvas>
          <!--<button class ="btn btn-primary" onclick="CargarDatosBarHorizontal()">grafico horizontal</button>-->
        </div>
        <div class ="col-lg-5">
        <canvas id="graficoscatter_parametro" width="500" height="500"></canvas>
        </div>

        

     </div>
      
  </div>
</div>




    
  </body>
  
</style>
</html>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" ></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" ></script>
   
  <script>

  CargarDatosBar();
  //CargarDatosBarHorizontal();
  CargarDatosGraficoPie();
  

        function CargarDatosBar(){  
            $.ajax({
                url:'controlador_grafico.php',
                type:'POST'

            }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                    var colores=[];
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }

                CreaGrafico(titulo,cantidad,colores,'bar','grafico en barra vertical','graficobar');
               // document.getElementById("graficobarhorizontal").style.display="none";
                //document.getElementById("graficobar").style.display="block";
             }
        })
            
}


function CargarDatosBarHorizontal(){  
      $.ajax({
          url:'controlador_grafico.php',
          type:'POST'

        }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                    var colores=[];
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
          CreaGrafico(titulo,cantidad,colores,'horizontalBar','grafico en barra horrizontal','graficobarhorizontal');
         // document.getElementById("graficobar").style.display="none";
          //document.getElementById("graficobarhorizontal").style.display="block";

          }
        

      })
      
}
function CargarDatosGraficoPie(){  
  
      $.ajax({
          url:'controlador_grafico.php',
          type:'POST'

        }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                    var colores=[];
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
          CreaGrafico(titulo,cantidad,colores,'pie','grafico tipo pastel','graficopie');
         // document.getElementById("graficobar").style.display="none";
          //document.getElementById("graficobarhorizontal").style.display="block";

          }
        

      })
      
}


function generarNumero(numero){
	return (Math.random()*numero).toFixed(0);
  }
  function colorRGB(){
        var coolor = "("+generarNumero(255)+"," + generarNumero(255) + "," + generarNumero(255) +")";
        return "rgb" + coolor;
    }


    ////////////////////////////////////////////////////////////////////////////////
    /////funciones para graficos con parametros
    TraerAnio();
    function CargarGraficosParametros(){
      //CargarDatosGraficoDoughnut();
      //CargarDatosGraficoPolar();
      CargarDatosGraficoScatter();
     // CargarDatosTotales();
      //CargarDatosTotales()
    }
 
    function TraerAnio() {
      var mifecha=new Date();
      var anio=mifecha.getFullYear();
      var cadena=";"
     // alert(anio)
     for (var i=2015; i<anio+1; i++){
       cadena+="<option value="+i+">"+i+"</option>";

     }
     var cadena2=";"
     cadena2="<option Selected Disabled>Seleccione año inicial</option>";
     cadena3="<option Selected Disabled>Seleccione año final</option>";
     $("#select_fano").html(cadena+cadena2);
     $("#select_fano_final").html(cadena+cadena3);
      
    }

    function CargarDatosGraficoDoughnut(){ 
      var fechaAnoInicio =$("#select_fano").val();
      var fechaAñoFinal=  $("#select_fano_final").val();
      var fechaMesInicio= $("#select_mes_inicial").val();
      var fechaMesFinal=$("#select_mes_final").val();
      var departamento=$("#select_departamento").val();
      var evento=$("#select_evento").val();

      $.ajax({
          url:'controlador_grafico_parametro.php',
          type:'POST',
          data:{
            anoInicio:fechaAnoInicio,
            anoFinal:fechaAñoFinal,
            mesInicio:fechaMesInicio,
            mesFinal:fechaMesFinal,
            departamento:departamento,
            evento:evento
          }

        }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                    var colores=[];
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
          CreaGrafico(titulo,cantidad,colores,'doughnut','grafico de dona','graficodoughnut_parametro');
         // document.getElementById("graficobar").style.display="none";
          //document.getElementById("graficobarhorizontal").style.display="block";

          }
        

      })
      
}
function CargarDatosGraficoPolar(){  
  var fechaAnoInicio=$("#select_fano").val();
      var fechaAñoFinal=$("#select_fano_final").val();
      var fechaMesInicio=$("#select_mes_inicial").val();
      var fechaMesFinal=$("#select_mes_final").val();
      var departamento=$("#select_departamento").val();
      var evento=$("#select_evento").val();

      $.ajax({
          url:'controlador_grafico_parametro.php',
          type:'POST',
          data:{
            anoInicio:fechaAnoInicio,
            anoFinal:fechaAñoFinal,
            mesInicio:fechaMesInicio,
            mesFinal:fechaMesFinal,
            departamento:departamento,
            evento:evento
          }

        }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                    var colores=[];
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    colores.push(colorRGB());
                }
          CreaGrafico(titulo,cantidad,colores,'bar','grafico de polar','graficopolarArea_parametro');
         // document.getElementById("graficobar").style.display="none";
          //document.getElementById("graficobarhorizontal").style.display="block";

          }
        

      })
      
}
function CargarDatosGraficoScatter(){  
  var fechaAnoInicio =$("#select_fano").val();
      var fechaAnoFinal=  $("#select_fano_final").val();
      //var fechaMesInicio= $("#select_mes_inicial").val();
     // var fechaMesFinal=$("#select_mes_final").val();
      //var departamento=$("#select_departamento").val();
      var evento=$("#select_evento").val();

      $.ajax({
          url:'controlador_grafico_parametro.php',
          type:'POST',
          data:{
            anoInicio:fechaAnoInicio,
            anoFinal:fechaAnoFinal,
            //mesInicio:fechaMesInicio,
            //mesFinal:fechaMesFinal,
            //departamento:departamento,
            evento:evento
          }

        }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                    var colores=[];
                    //var tituloyValor=[];
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    
                    colores.push(colorRGB());
                }
          CreaGrafico(titulo,cantidad,colores,'line','grafico de scatter','graficoscatter_parametro');
         // document.getElementById("graficobar").style.display="none";
          //document.getElementById("graficobarhorizontal").style.display="block";

          }
        

      })
      
}
function CargarDatosTotales(){  
  var fechaAnoInicio =$("#select_fano").val();
      var fechaAñoFinal=  $("#select_fano_final").val();
      var fechaMesInicio= $("#select_mes_inicial").val();
      var fechaMesFinal=$("#select_mes_final").val();
      var departamento=$("#select_departamento").val();
      var evento=$("#select_evento").val();

      $.ajax({
          url:'controlador_totales.php',
          type:'POST',
          data:{
            anoInicio:fechaAnoInicio,
            anoFinal:fechaAñoFinal,
            mesInicio:fechaMesInicio,
            mesFinal:fechaMesFinal,
            departamento:departamento,
            evento:evento
          }

        }).done(function(resp){
                if (resp.length>0){
                    var titulo=[];
                    var cantidad=[];
                   
                    var data=JSON.parse(resp);
                 for(var i=0; i<data.length; i++){
                    titulo.push(data[i][0]);
                    cantidad.push(data[i][1]);
                    
                   
                }
                //$("#hola").html('oo');
                
                //document.getElementById("hola").value='titulo';
                
                
          enviar(titulo,cantidad);
         // document.getElementById("graficobar").style.display="none";
          //document.getElementById("graficobarhorizontal").style.display="block";

          }
          

      })
      
}


function enviar(titulo,cantidad){

document.getElementById("hola").value=titulo+cantidad;
}
//////////////////////////////////crear grafico

function CreaGrafico(titulo,cantidad,colores,tipo,encabezado,id) {
    
    var ctx = document.getElementById(id).getContext('2d');
     var myChart = new Chart(ctx, {
     type: tipo,
     data: {
        labels: titulo,
        datasets: [{
            label: [encabezado],
            data: cantidad,
            backgroundColor:colores,
            borderColor:colores,
            borderWidth: 1
        }]
    },
    options: {
      responsive:true,
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