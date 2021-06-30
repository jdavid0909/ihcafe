<?php
require  'prueba2.php';
prueba();
function prueba(){
$header=array();
// $peliculas=array();
// $peliculas["items"]=array();
$header []='Authorization: token 5c0f67cdfaf731da94c7a1394f5eff3476616aca';
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'https://kf.kobotoolbox.org/assets/a9SffDNxS9emi5nao2MbDJ/submissions/?format=json');
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($curl);

curl_close($curl);

$result=json_decode($result,true);
foreach ($result as $item) {
         echo $item["Aspectos_Limitantes/c2_lluvias_irregulares"];
         //echo ("APELLIDO: "." ".$item["apellido"]." ");
         
           // insertNombre($item["nombre"],$item["apellido"]);
    }
return $result;
}




?>


