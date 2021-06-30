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

		function TraeDatosGraficoParametroAgencia($evento,$fechaAnoInicio,$fechaAñoFinal,$agencia){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametrosAgencia('$evento','$fechaAnoInicio','$fechaAñoFinal','$agencia')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosGraficoParametroGenero($evento,$fechaAnoInicio,$fechaAñoFinal,$genero){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametrosGenero('$evento','$fechaAnoInicio','$fechaAñoFinal','$genero')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosGraficoParametro($evento,$fechaAnoInicio,$fechaAñoFinal,$departamento){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametros('$evento','$fechaAnoInicio','$fechaAñoFinal','$departamento')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}

		function TraeDatosGraficoParametroTecnico($evento,$fechaAnoInicio,$fechaAñoFinal,$departamento){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametrosTecnico('$evento','$fechaAnoInicio','$fechaAñoFinal','$departamento')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosGraficoParametroFecha($evento,$fechaAnoInicio,$fechaAñoFinal){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametrosFecha('$evento','$fechaAnoInicio','$fechaAñoFinal')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosGraficoParametroRegional($evento,$fechaAnoInicio,$fechaAñoFinal,$regional){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidadParametrosRegional('$evento','$fechaAnoInicio','$fechaAñoFinal','$regional')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotales($evento,$fechaAnoInicio,$fechaAñoFinal){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador_fecha('$evento','$fechaAnoInicio','$fechaAñoFinal')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotalesGenero($evento,$fechaAnoInicio,$fechaAñoFinal,$genero){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador_genero('$evento','$fechaAnoInicio','$fechaAñoFinal','$genero')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotalesAgencia($evento,$fechaAnoInicio,$fechaAñoFinal,$agencia){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador_agencia('$evento','$fechaAnoInicio','$fechaAñoFinal','$agencia')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotalesDepartamento($evento,$fechaAnoInicio,$fechaAñoFinal,$departamento){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador_departamento('$evento','$fechaAnoInicio','$fechaAñoFinal','$departamento')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}

		function TraeDatosTotalesTecnico($evento,$fechaAnoInicio,$fechaAñoFinal,$tecnico){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador_tecnico('$evento','$fechaAnoInicio','$fechaAñoFinal','$tecnico')";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
		function TraeDatosTotalesRegional($evento,$fechaAnoInicio,$fechaAñoFinal,$regional){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL vulnerabilidad_contador_regional('$evento','$fechaAnoInicio','$fechaAñoFinal','$regional')";	
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


		function CargarDatosTecnicos(){
			//$sql = "CALL SP_DATOSGRAFICO_BAR";
			$sql = "CALL llenadoTecnicos()";	
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
