<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];

$anoinicio=$_POST['anoinicio'];
$anofinal=$_POST['anofinal'];

$regional=$_POST['regional'];

$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosTotalesRegional($anoinicio,$anofinal,$regional);
echo json_encode($consulta);


?>