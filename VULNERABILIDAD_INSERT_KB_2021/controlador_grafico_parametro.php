<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];


$evento=$_POST['evento'];

$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosGraficoParametro($evento);
echo json_encode($consulta);


?>