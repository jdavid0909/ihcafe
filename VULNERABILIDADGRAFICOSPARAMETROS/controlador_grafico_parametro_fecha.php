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


$MG=new Modelo_Grafico();

$consulta= $MG ->TraeDatosGraficoParametroFecha($evento,$fechaAnoInicio,$fechaAñoFinal);
echo json_encode($consulta);


?>