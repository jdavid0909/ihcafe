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
		function TraeDatosGraficoParametro($evento,$fechaInicio,$fechaFinal){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametrosEuroclima('$evento','$fechaInicio','$fechaFinal')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotales(){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_general_contador()";	
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
