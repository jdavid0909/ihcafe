<?php
	class Modelo_Grafico{
	private $conexion;
		function __construct()
		{
			require_once ('conexion.php');
            $this->conexion = new conexion();
			$this->conexion->conectar();
        }



		
		
	

	
		
		function TraeDatosGraficoParametroRegional($anoinicio,$anofinal,$regional){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadRankinRecomendacionesRegional('$anoinicio','$anofinal','$regional')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosGraficoParametroAgencia($anoinicio,$anofinal,$agencia){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadRankinRecomendacionesAgencia('$anoinicio','$anofinal','$agencia')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosGraficoParametroFecha($anoinicio,$anofinal){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadRankinRecomendacionesFecha('$anoinicio','$anofinal')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
	


		function TraeDatosTotalesRegional($anoinicio,$anofinal,$regional){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL VulnerabilidadRankinRecomendaciones_contador_regional('$anoinicio','$anofinal','$regional')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}

		function TraeDatosTotalesAgencia($anoinicio,$anofinal,$agencia){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadRankinRecomendaciones_contador_Agencia('$anoinicio','$anofinal','$agencia')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotalesFecha($anoinicio,$anofinal){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadRankinRecomendaciones_contador_fecha('$anoinicio','$anofinal')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}

		function CargarDatosAgencia(){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL datosAgencias()";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}


		

	}
	

?>
