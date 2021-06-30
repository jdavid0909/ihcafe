<?php
require 'modelo_grafico.php';

$MG=new Modelo_Grafico();
$consulta= $MG ->TraeDatosGraficoBar();
echo json_encode($consulta);
?>