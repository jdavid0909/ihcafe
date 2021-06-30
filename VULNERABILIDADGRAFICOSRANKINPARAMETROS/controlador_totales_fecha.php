<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];

$anoinicio=$_POST['anoinicio'];
$anofinal=$_POST['anofinal'];



$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosTotalesFecha($anoinicio,$anofinal);
echo json_encode($consulta);


?>