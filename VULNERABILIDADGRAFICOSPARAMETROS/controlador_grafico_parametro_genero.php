<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];
// $fechaAnoInicio=$_POST['anoInicio'];
// $fechaAñoFinal=$_POST['anoFinal'];date('Y-m-d', strtotime($_POST['anoInicio']));
$fechaAnoInicio=$_POST['anoInicio'];
$fechaAñoFinal=$_POST['anoFinal'];
$evento=$_POST['evento'];
$genero=$_POST['genero'];

$MG=new Modelo_Grafico();

$consulta= $MG ->TraeDatosGraficoParametroGenero($evento,$fechaAnoInicio,$fechaAñoFinal,$genero);
echo json_encode($consulta);


?>