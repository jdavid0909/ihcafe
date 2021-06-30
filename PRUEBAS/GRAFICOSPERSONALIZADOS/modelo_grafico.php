<?php
	class Modelo_Grafico{
	private $conexion;
		function __construct()
		{
			require_once ('conexion.php');
            $this->conexion = new conexion();
			$this->conexion->conectar();
        }

		
		function TraeDatosGraficoBar(){
			$sql = "CALL vulnerabilidad_contar_fichas";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		//,'$fechaMesInicio','$fechaMesFinal','$departamento',
		function TraeDatosGraficoParametro($fechaAnoInicio,
		$fechaAnoFinal,$evento){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL estadisticanivelnacionalParametros('$fechaAnoInicio','$fechaAnoFinal','$evento')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotales($fechaAnoInicio,
		$fechaAñoFinal,$fechaMesInicio,$fechaMesFinal,$departamento,$evento){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador('$fechaAnoInicio',
			'$fechaAñoFinal','$fechaMesInicio','$fechaMesFinal','$departamento','$evento')";	
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
