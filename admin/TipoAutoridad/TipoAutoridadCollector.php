<?php 
	include_once('TipoAutoridad.php');
	include_once('../Collector.php');

	/**
	* 
	*/
	class TipoAutoridadCollector extends Collector
	{
		function showTiposAutoridades(){
			$rows = self::$db->getRows("SELECT * FROM tipoautoridad");
			$arrayTipoAutoridad = array();
			foreach ($rows as $c) {
				$aux = new TipoAutoridad($c{'id_tipoautoridad'},$c{'nombre'});
				array_push($arrayTipoAutoridad, $aux);
			}
			return $arrayTipoAutoridad;
		}

		function showTipoAutoridad($id){
			$rows = self::$db->getRows("SELECT * FROM tipoautoridad WHERE id_tipoautoridad = ?", array("{$id}"));
			$ObjTipoAutoridad = new TipoAutoridad($rows[0]{'id_tipo_autoridad'},$rows[0]{'nombre'});
			return $ObjTipoAutoridad;
		}

		function updateTipoAutoridad($id_tipo_autoridad,$nombre){
			$insertRow = self::$db->updateRow("UPDATE public.tipoautoridad SET nombre = ? WHERE id_tipoautoridad = ?", array ("{$nombre}",$id_tipo_autoridad));

		}

		function deleteTipoAutoridad($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.tipoautoridad WHERE id_tipoautoridad = ?" , array ("{$id}"));
		}

		function insertTipoAutoridad($nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.TipoAutoridad(nombre) VALUES (?)", array ("{$nombre}"));             
  }
	}

 ?>