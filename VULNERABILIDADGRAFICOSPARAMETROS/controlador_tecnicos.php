<?php
require 'modelo_grafico.php';
//$fechaano=$_POST['ano'];
//$fechainicio=$_POST['inicio'];
//$fechafin=$_POST['fin'];



$MG=new Modelo_Grafico();
$consulta= $MG ->CargarDatosTecnicos();
echo json_encode($consulta);


?>