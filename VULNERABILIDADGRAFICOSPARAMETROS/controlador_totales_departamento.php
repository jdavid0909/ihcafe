<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];

$fechaAnoInicio=$_POST['anoInicio'];
$fechaAñoFinal=$_POST['anoFinal'];
$evento=$_POST['evento'];
$departamento=$_POST['departamento'];

$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosTotalesDepartamento($evento,$fechaAnoInicio,$fechaAñoFinal,$departamento);
echo json_encode($consulta);


?>