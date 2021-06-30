<?php

// $mysqli = new mysqli("localhost", "root", "", "ihcafefichas");
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
// echo $mysqli->host_info . "\n";



// echo $mysqli->host_info . "\n";

// $sentencia = "CALL insert_prueba(?)";
// $valor = 'hola';
// $sentencia->bindParam(1, $valor, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 

// // llamar al procedimiento almacenado
// $sentencia->execute();
function SiNoQuizas($variable){
      if ($variable =='0.5') {
            
        $variable = "Quizas";
        
       
      }else if($variable =='1') {
          
          $variable = "No";
          
  
      }else if($variable == '-1'){
         $variable = "Si";
         
      }
      return ($variable);
  }

  function Genero($variable){
      if ($variable =='1') {
            
        $variable = "Hombre";
        
       
      }else  {
          
          $variable = "Mujer";
          
  
      }
      return ($variable);
  }
function submision($variedad,$index,$tabla,$submision,$submision2,$submision3,$fecha,$estatus){
      $servername = "localhost";
      $database = "ihcafefichas";
      $username = "root";
      $password = "";
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Check connection
      if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }
      $sql = "Call vulnerabilidad_insert_variedades_kb('$variedad','$index','$tabla','$submision','$submision2','$submision3','$fecha','$estatus')";
      if (mysqli_query($conn,$sql)) {
            // echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
      
      
      
}  

function vulnerabilidad_insert_kb($start,$end,$today,$username,$simeserial,$subscriberid,$deviceid,$Fecha_de_inicio,$departamento,$municipio,$aldea,$Ubicacion_evento,$latitud,$longitud, $region_Cafetalera_Regional,$region_Cafetalera_Agencia,
$nombre_productor,$n_Identidad,$clave_productor,$sexo,$edad,$telefono,$finca_Pendiente,$finca_area,$finca_area_cafe, $finca_producion_promedio, $finca_Edad_cafetal, $meses_secos,
$c1_cambios_tem,$c1_1_practica_medida,$c2_lluvias_irregulares,$c1_2_practica_medida,$c3_aumento_lluvia,$c1_3_practica_medida,$c4_riesgo_huracanes,$c1_4_practica_medida,
$c5_sequia_ult_anos,$c1_5_practica_medida,$c6_vientos_fuertes,$c1_6_practica_medida,$c7_senales_erosion,$c1_7_practica_medida,$c8_fetilidad_suelos,$c1_8_practica_medida,
$c9_faltan_pract_suelo,$c1_9_practica_medida,$c10_ausencia_cober_hierbas,$c1_10_practica_medida,$c11_floracion_irregular,$c1_11_practica_medida,$c12_incre_caida_flores,
$c1_12_practica_medida,$c13_incre_dano_plagas,$c1_13_practica_medida,$c14_diversificacion_cafetal,$c1_14_practica_medida,$c15_cafetales_pleno_sol,$c1_15_practica_medida,
$c16_cafetales_viejos,$c1_16_practica_medida,$c17_var_existentes_resistentes,$c1_17_practica_medida,$c18_practica_anual_poda,$c1_18_practica_medida,$c19_resiembra_cafetos,
$c1_19_practica_medida,$c20_produc_bajando,$c1_20_practica_medida,$c21_aplica_mas_200g,$c1_21_practica_medida,$c22_ausente_abono_orga,$c1_22_practica_medida,
$c23_queb_fuen_sin_cobertura,$c1_23_practica_medida,$c24_sin_asocio_arboles,$c1_24_practica_medida,$c25_ausente_proc_org,$c1_25_practica_medida,
$total,$Tecnicos,$Observaci_n_de_sus_visita,$__version__,$_version_,$_version__001,$instanceID,$index ){

$servername = "localhost";
$database = "ihcafefichas";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


// echo "Connected successfully";
$sql = "Call vulnerabilidad_insert_kb('$start','$end','$today','$username','$simeserial','$subscriberid','$deviceid','$Fecha_de_inicio','$departamento','$municipio','$aldea','$Ubicacion_evento', 
'$latitud','$longitud','$region_Cafetalera_Regional','$region_Cafetalera_Agencia',
'$nombre_productor','$n_Identidad','$clave_productor','$sexo','$edad','$telefono','$finca_Pendiente','$finca_area','$finca_area_cafe', '$finca_producion_promedio', '$finca_Edad_cafetal', '$meses_secos',
'$c1_cambios_tem','$c1_1_practica_medida','$c2_lluvias_irregulares','$c1_2_practica_medida','$c3_aumento_lluvia','$c1_3_practica_medida','$c4_riesgo_huracanes','$c1_4_practica_medida',
'$c5_sequia_ult_anos','$c1_5_practica_medida','$c6_vientos_fuertes','$c1_6_practica_medida','$c7_senales_erosion','$c1_7_practica_medida','$c8_fetilidad_suelos','$c1_8_practica_medida',
'$c9_faltan_pract_suelo','$c1_9_practica_medida','$c10_ausencia_cober_hierbas','$c1_10_practica_medida','$c11_floracion_irregular','$c1_11_practica_medida','$c12_incre_caida_flores',
'$c1_12_practica_medida','$c13_incre_dano_plagas','$c1_13_practica_medida','$c14_diversificacion_cafetal','$c1_14_practica_medida','$c15_cafetales_pleno_sol','$c1_15_practica_medida',
'$c16_cafetales_viejos','$c1_16_practica_medida','$c17_var_existentes_resistentes','$c1_17_practica_medida','$c18_practica_anual_poda','$c1_18_practica_medida','$c19_resiembra_cafetos',
'$c1_19_practica_medida','$c20_produc_bajando','$c1_20_practica_medida','$c21_aplica_mas_200g','$c1_21_practica_medida','$c22_ausente_abono_orga','$c1_22_practica_medida',
'$c23_queb_fuen_sin_cobertura','$c1_23_practica_medida','$c24_sin_asocio_arboles','$c1_24_practica_medida','$c25_ausente_proc_org','$c1_25_practica_medida',
'$total','$Tecnicos','$Observaci_n_de_sus_visita','$__version__','$_version_','$_version__001','$instanceID','$index')";

if (mysqli_query($conn,$sql)) {
      // echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>