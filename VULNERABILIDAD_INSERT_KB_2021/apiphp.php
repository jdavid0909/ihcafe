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
// echo ($result);

$result=json_decode($result,true);
$index = 1;#el de variedades
$index2=1;#el de estructura vulnerabilidad
$contador = 1;

foreach ($result as $item) {
//Variables traidas desde potsman
        $start = $item["start"];
        $end = $item["end"];
        $today = $item["today"];
        $username = $item["username"];
        $simeserial = $item["simserial"];
        $subscriberid = $item["subscriberid"];
        $deviceid = $item["deviceid"];
        $Fecha_de_inicio = $item["Fecha_de_Inicio"];
        $departamento = $item["Ubicacion/Departamento"];
        $municipio = $item["Ubicacion/Municipio"];
        $aldea = $item["Ubicacion/Aldea"];
        $Ubicacion_evento = $item["Ubicacion/Ubicacion_del_evento"];
        $region_Cafetalera_Regional= $item["Region_Cafetalera/Regional"];
        $region_Cafetalera_Agencia = $item["Region_Cafetalera/Agencia"];
        $nombre_productor = $item["Datos_Generales_del_Productor/Nombre_del_productor"];
        $n_Identidad = $item["Datos_Generales_del_Productor/N_mero_de_Identidad"];
        $clave_productor = $item["Datos_Generales_del_Productor/Clave_de_productor"];
        $sexo =Genero( $item["Datos_Generales_del_Productor/Sexo"]);
        $edad = $item["Datos_Generales_del_Productor/Edad"];
        $telefono = $item["Datos_Generales_del_Productor/Telefono"];
        $finca_Pendiente = $item["Informacion_de_la_Finca/Pendiente"];
        $finca_area = $item["Informacion_de_la_Finca/_rea_Total_de_la_Finca"];
        $finca_area_cafe = $item["Informacion_de_la_Finca/_rea_total_del_cafe"];
        $finca_producion_promedio = $item["Informacion_de_la_Finca/Producci_n_Promedio"];
        $finca_Edad_cafetal = $item["Informacion_de_la_Finca/Edad_del_Cafetal"];
        $meses_secos = $item["Informacion_de_la_Finca/Numero_de_meses_Secos"];
        $variedades = $item["Variedades"];//NOTA ESTE AUN NO FUNCIONA PORQUE ES UN ARRAY

       
        
        foreach ($variedades as $items ) {
            //el index ya se maneja desde un autoincrement 
            $Variedades_001 = isset($items["Variedades/Variedades_001"]) ? $items["Variedades/Variedades_001"] : '';
            submision($index,$Variedades_001,'vulneravilidad climatica 2020',$contador,1,1,$Fecha_de_inicio,1);
            $index = $index + 1;
        }
        
        $c1_cambios_tem = $item["Aspectos_Limitantes/c1_cambios_tem"];
        $c1_1_practica_medida = isset($item["Aspectos_Limitantes/c1_1_practica_medida"]) ? $item["Aspectos_Limitantes/c1_1_practica_medida"] : '';
        $c2_lluvias_irregulares = $item["Aspectos_Limitantes/c2_lluvias_irregulares"];
        $c1_2_practica_medida = isset($item["Aspectos_Limitantes/c1_2_practica_medida"]) ? $item["Aspectos_Limitantes/c1_2_practica_medida"] : '';
        $c3_aumento_lluvia = $item["Aspectos_Limitantes/c3_aumento_lluvia"];
        $c1_3_practica_medida = isset($item["Aspectos_Limitantes/c1_3_practica_medida"]) ? $item["Aspectos_Limitantes/c1_3_practica_medida"] : '';
        $c4_riesgo_huracanes = $item["Aspectos_Limitantes/c4_riesgo_huracanes"];
        $c1_4_practica_medida = isset($item["Aspectos_Limitantes/c1_4_practica_medida"]) ? $item["Aspectos_Limitantes/c1_4_practica_medida"] : '';
        $c5_sequia_ult_anos = $item["Aspectos_Limitantes/c5_sequia_ult_anos"];
        $c1_5_practica_medida = isset($item["Aspectos_Limitantes/c1_5_practica_medida"]) ? $item["Aspectos_Limitantes/c1_5_practica_medida"]: '';
        $c6_vientos_fuertes = $item["Aspectos_Limitantes/c6_vientos_fuertes"];
        $c1_6_practica_medida = isset($item["Aspectos_Limitantes/c1_6_practica_medida"]) ? $item["Aspectos_Limitantes/c1_6_practica_medida"] : '';
        $c7_senales_erosion = $item["Aspectos_Limitantes/c7_senales_erosion"];
        $c1_7_practica_medida = isset($item["Aspectos_Limitantes/c1_7_practica_medida"]) ? $item["Aspectos_Limitantes/c1_7_practica_medida"] : '';
        $c8_fetilidad_suelos = $item["Aspectos_Limitantes/c8_fetilidad_suelos"];
        $c1_8_practica_medida = isset($item["Aspectos_Limitantes/c1_8_practica_medida"]) ? $item["Aspectos_Limitantes/c1_8_practica_medida"] : '';
        $c9_faltan_pract_suelo = $item["Aspectos_Limitantes/c9_faltan_pract_suelo"];
        $c1_9_practica_medida = isset($item["Aspectos_Limitantes/c1_9_practica_medida"]) ? $item["Aspectos_Limitantes/c1_9_practica_medida"] : '';
        $c10_ausencia_cober_hierbas = $item["Aspectos_Limitantes/c10_ausencia_cober_hierbas"];
        $c1_10_practica_medida = isset($item["Aspectos_Limitantes/c1_10_practica_medida"]) ? $item["Aspectos_Limitantes/c1_10_practica_medida"] : '';
        $c11_floracion_irregular = $item["Aspectos_Limitantes/c11_floracion_irregular"];
        $c1_11_practica_medida = isset($item["Aspectos_Limitantes/c1_11_practica_medida"]) ? $item["Aspectos_Limitantes/c1_11_practica_medida"] : '';
        $c12_incre_caida_flores =$item["Aspectos_Limitantes/c12_incre_caida_flores"];
        $c1_12_practica_medida = isset($item["Aspectos_Limitantes/c1_12_practica_medida"]) ? $item["Aspectos_Limitantes/c1_12_practica_medida"] : '';
        $c13_incre_dano_plagas = $item["Aspectos_Limitantes/c13_incre_dano_plagas"];
        $c1_13_practica_medida = isset($item["Aspectos_Limitantes/c1_13_practica_medida"]) ? $item["Aspectos_Limitantes/c1_13_practica_medida"] : '';
        $c14_diversificacion_cafetal = $item["Aspectos_Limitantes/c14_diversificacion_cafetal"];
        $c1_14_practica_medida = isset($item["Aspectos_Limitantes/c1_14_practica_medida"]) ? $item["Aspectos_Limitantes/c1_14_practica_medida"] : '';
        $c15_cafetales_pleno_sol = $item["Aspectos_Limitantes/c15_cafetales_pleno_sol"];
        $c1_15_practica_medida = isset($item["Aspectos_Limitantes/c1_15_practica_medida"]) ? $item["Aspectos_Limitantes/c1_15_practica_medida"] : '';
        $c16_cafetales_viejos = $item["Aspectos_Limitantes/c16_cafetales_viejos"];
        $c1_16_practica_medida = isset($item["Aspectos_Limitantes/c1_16_practica_medida"]) ? $item["Aspectos_Limitantes/c1_16_practica_medida"] : '';
        $c17_var_existentes_resistentes =$item["Aspectos_Limitantes/c17_var_existentes_resistentes"];
        $c1_17_practica_medida = isset($item["Aspectos_Limitantes/c1_17_practica_medida"]) ? $item["Aspectos_Limitantes/c1_17_practica_medida"] : '';
        $c18_practica_anual_poda = $item["Aspectos_Limitantes/c18_practica_anual_poda"];
        $c1_18_practica_medida = isset($item["Aspectos_Limitantes/c1_18_practica_medida"]) ? $item["Aspectos_Limitantes/c1_18_practica_medida"] : '';
        $c19_resiembra_cafetos = $item["Aspectos_Limitantes/c19_resiembra_cafetos"];
        $c1_19_practica_medida = isset($item["Aspectos_Limitantes/c1_19_practica_medida"]) ? $item["Aspectos_Limitantes/c1_19_practica_medida"] : '';
        $c20_produc_bajando = $item["Aspectos_Limitantes/c20_produc_bajando"];
        $c1_20_practica_medida = isset($item["Aspectos_Limitantes/c1_20_practica_medida"]) ? $item["Aspectos_Limitantes/c1_20_practica_medida"] : '';
        $c21_aplica_mas_200g = $item["Aspectos_Limitantes/c21_aplica_mas_200g"];
        $c1_21_practica_medida = isset($item["Aspectos_Limitantes/c1_21_practica_medida"]) ? $item["Aspectos_Limitantes/c1_21_practica_medida"] : '';
        $c22_ausente_abono_orga = $item["Aspectos_Limitantes/c22_ausente_abono_orga"];
        $c1_22_practica_medida = isset($item["Aspectos_Limitantes/c1_22_practica_medida"]) ? $item["Aspectos_Limitantes/c1_22_practica_medida"] : '';
        $c23_queb_fuen_sin_cobertura = $item["Aspectos_Limitantes/c23_queb_fuen_sin_cobertura"];
        $c1_23_practica_medida = isset($item["Aspectos_Limitantes/c1_23_practica_medida"]) ? $item["Aspectos_Limitantes/c1_23_practica_medida"] : '';
        $c24_sin_asocio_arboles = $item["Aspectos_Limitantes/c24_sin_asocio_arboles"];
        $c1_24_practica_medida = isset($item["Aspectos_Limitantes/c1_24_practica_medida"]) ? $item["Aspectos_Limitantes/c1_24_practica_medida"] : '';
        $c25_ausente_proc_org = $item["Aspectos_Limitantes/c25_ausente_proc_org"];
        $c1_25_practica_medida = isset($item["Aspectos_Limitantes/c1_25_practica_medida"]) ? $item["Aspectos_Limitantes/c1_25_practica_medida"] : '';
        $total = $item["Aspectos_Limitantes/total"];
        $Tecnicos = $item["Tecnicos"];
        $__version__ = $item["__version__"];
        $_version_ = $item["_version_"];
        $_version__001 = $item["_version__001"];
        $instanceID = $item["meta/instanceID"];
        $_geolocation =$item["_geolocation"];
        $latitud = $_geolocation[0]; 
        $longitud = $_geolocation[1];   
        $Observaci_n_de_sus_visita = isset($item["Observaci_n_de_sus_visita"]) ? $item["Observaci_n_de_sus_visita"]: '';
   
    //fin de las variables
        
        // $c2_lluvias_irregulares = $c2_lluvias_irregulares;

    //conversion a si no y quizas las preguntas        
        $c1_cambios_tem = SiNoQuizas($c1_cambios_tem);
        $c2_lluvias_irregulares= SiNoQuizas($c2_lluvias_irregulares);
        $c3_aumento_lluvia = SiNoQuizas($c3_aumento_lluvia);
        $c4_riesgo_huracanes = SiNoQuizas($c4_riesgo_huracanes);
        $c5_sequia_ult_anos = SiNoQuizas($c5_sequia_ult_anos);
        $c6_vientos_fuertes = SiNoQuizas($c6_vientos_fuertes);
        $c7_senales_erosion = SiNoQuizas($c7_senales_erosion);
        $c8_fetilidad_suelos =SiNoQuizas($c8_fetilidad_suelos);
        $c9_faltan_pract_suelo = SiNoQuizas($c9_faltan_pract_suelo);
        $c10_ausencia_cober_hierbas = SiNoQuizas($c10_ausencia_cober_hierbas);
        $c11_floracion_irregular = SiNoQuizas($c11_floracion_irregular);
        $c12_incre_caida_flores = SiNoQuizas($c12_incre_caida_flores);
        $c13_incre_dano_plagas = SiNoQuizas($c13_incre_dano_plagas);
        $c14_diversificacion_cafetal = SiNoQuizas($c14_diversificacion_cafetal);
        $c15_cafetales_pleno_sol  = SiNoQuizas($c15_cafetales_pleno_sol);
        $c16_cafetales_viejos = SiNoQuizas($c16_cafetales_viejos);
        $c17_var_existentes_resistentes = SiNoQuizas($c17_var_existentes_resistentes);
        $c18_practica_anual_poda= SiNoQuizas($c18_practica_anual_poda);
        $c19_resiembra_cafetos = SiNoQuizas($c19_resiembra_cafetos);
        $c20_produc_bajando = SiNoQuizas($c20_produc_bajando);
        $c21_aplica_mas_200g  = SiNoQuizas($c21_aplica_mas_200g );
        $c22_ausente_abono_orga  = SiNoQuizas($c22_ausente_abono_orga );
        $c23_queb_fuen_sin_cobertura = SiNoQuizas($c23_queb_fuen_sin_cobertura);
        $c24_sin_asocio_arboles  = SiNoQuizas($c24_sin_asocio_arboles );
        $c25_ausente_proc_org = SiNoQuizas($c25_ausente_proc_org);
    //fin de la conversion
        
        
    //llamar ala funcion que manda a llamar ala base de datos
        vulnerabilidad_insert_kb($start,$end,$today,$username,$simeserial,$subscriberid,$deviceid,$Fecha_de_inicio,$departamento,$municipio,$aldea,$Ubicacion_evento,$latitud,$longitud, $region_Cafetalera_Regional,$region_Cafetalera_Agencia,
        $nombre_productor,$n_Identidad,$clave_productor,$sexo,$edad,$telefono,$finca_Pendiente,$finca_area,$finca_area_cafe, $finca_producion_promedio, $finca_Edad_cafetal, $meses_secos,
        $c1_cambios_tem,$c1_1_practica_medida,$c2_lluvias_irregulares,$c1_2_practica_medida,$c3_aumento_lluvia,$c1_3_practica_medida,$c4_riesgo_huracanes,$c1_4_practica_medida,
        $c5_sequia_ult_anos,$c1_5_practica_medida,$c6_vientos_fuertes,$c1_6_practica_medida,$c7_senales_erosion,$c1_7_practica_medida,$c8_fetilidad_suelos,$c1_8_practica_medida,
        $c9_faltan_pract_suelo,$c1_9_practica_medida,$c10_ausencia_cober_hierbas,$c1_10_practica_medida,$c11_floracion_irregular,$c1_11_practica_medida,$c12_incre_caida_flores,
        $c1_12_practica_medida,$c13_incre_dano_plagas,$c1_13_practica_medida,$c14_diversificacion_cafetal,$c1_14_practica_medida,$c15_cafetales_pleno_sol,$c1_15_practica_medida,
        $c16_cafetales_viejos,$c1_16_practica_medida,$c17_var_existentes_resistentes,$c1_17_practica_medida,$c18_practica_anual_poda,$c1_18_practica_medida,$c19_resiembra_cafetos,
        $c1_19_practica_medida,$c20_produc_bajando,$c1_20_practica_medida,$c21_aplica_mas_200g,$c1_21_practica_medida,$c22_ausente_abono_orga,$c1_22_practica_medida,
        $c23_queb_fuen_sin_cobertura,$c1_23_practica_medida,$c24_sin_asocio_arboles,$c1_24_practica_medida,$c25_ausente_proc_org,$c1_25_practica_medida,
        $total,$Tecnicos,$Observaci_n_de_sus_visita,$__version__,$_version_,$_version__001,$instanceID,$index2);

        $index2 = $index2 + 1;
        $contador = $contador +1 ;

        // echo $variedades;
        //  echo ("NOMBRE: "." ".$item["nombre"]." ");
        //  echo ("APELLIDO: "." ".$item["apellido"]." ");
         
        

        // echo ($item.["start"]);
        
    }
    
return $result;




}

?>


