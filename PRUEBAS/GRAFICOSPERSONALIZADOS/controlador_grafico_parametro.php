<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];

$fechaAnoInicio=$_POST['anoInicio'];
$fechaAnoFinal=$_POST['anoFinal'];
//$fechaMesInicio=$_POST['mesInicio'];
//$fechaMesFinal=$_POST['mesFinal'];
//$departamento=$_POST['departamento'];
$evento=$_POST['evento'];

$MG=new Modelo_Grafico();//$fechaMesInicio,$fechaMesFinal,$departamento,
$consulta= $MG ->TraeDatosGraficoParametro($fechaAnoInicio,$fechaAnoFinal,$evento);
echo json_encode($consulta);


?>