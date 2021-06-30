<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];
// $fechaAnoInicio=$_POST['anoInicio'];
// $fechaAñoFinal=$_POST['anoFinal'];date('Y-m-d', strtotime($_POST['anoInicio']));
$anoinicio=$_POST['anoinicio'];
$anofinal=$_POST['anofinal'];

$regional=$_POST['regional'];

$MG=new Modelo_Grafico();

$consulta= $MG ->TraeDatosGraficoParametroRegional($anoinicio,$anofinal,$regional);
echo json_encode($consulta);


?>