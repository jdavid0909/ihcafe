<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];

$fechaAnoInicio=$_POST['anoInicio'];
$fechaAñoFinal=$_POST['anoFinal'];
$evento=$_POST['evento'];
$tecnico=$_POST['tecnico'];

$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosTotalesTecnico($evento,$fechaAnoInicio,$fechaAñoFinal,$tecnico);
echo json_encode($consulta);


?>