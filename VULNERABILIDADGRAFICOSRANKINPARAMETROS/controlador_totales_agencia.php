<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];

$anoinicio=$_POST['anoinicio'];
$anofinal=$_POST['anofinal'];

$agencia=$_POST['agencia'];

$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosTotalesAgencia($anoinicio,$anofinal,$agencia);
echo json_encode($consulta);


?>