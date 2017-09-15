<?php 
	include_once('EstadoDenuncia.php');
	include_once('../Collector.php');

	/**
	* 
	*/
	class EstadoDenunciaCollector extends Collector
	{
		function showEstadoDenuncia(){
			$rows = self::$db->getRows("SELECT id_estado_denuncia,nombre FROM estadodenuncia");
			$arrayestadodenuncia = array();
			foreach ($rows as $c) {
				$aux = new EstadoDenuncia($c{'id_estado_denuncia'},$c{'nombre'});
				array_push($arrayestadodenuncia, $aux);
			}
			  return $arrayestadodenuncia; 
		}

		function showEstadoDenuncias($id){
			$rows = self::$db->getRows("SELECT * FROM estadodenuncia WHERE id_estado_denuncia = ?", array("{$id}"));
			$ObjEstadoDenuncia = new EstadoDenuncia($rows[0]{'id_estado_denuncia'},$rows[0]{'nombre'});
			return $ObjEstadoDenuncia;
		}

		function updateEstadoDenuncia($id,$nombre){
			$insertRow = self::$db->updateRow("UPDATE public.estadodenuncia SET nombre = ? WHERE id_estado_denuncia = ?", array ("{$nombre}",$id));

		}

		function deleteEstadoDenuncia($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.estadodenuncia WHERE id_estado_denuncia = ?" , array ("{$id}"));
		}


function insertEstadoDenuncia($nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.estadodenuncia(nombre) VALUES (?)", array ("{$nombre}"));             
  }
	}

 ?>