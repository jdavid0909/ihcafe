<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];


$evento=$_POST['evento'];
$fechaInicio=$_POST['fechaInicio'];
$fechaFinal=$_POST['fechaFinal'];
$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosGraficoParametro($evento,$fechaInicio,$fechaFinal);
echo json_encode($consulta);


?>