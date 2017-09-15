<?php 
	include_once('Autoridad.php');
	include_once('../Collector.php');

	/**
	* 
	*/
	class AutoridadCollector extends Collector
	{
		function showAutoridades(){
			$rows = self::$db->getRows("SELECT idautoridad, nombre, telefono, email, id_tipoautoridad, id_usuario FROM autoridad");
			$arrayAutoridad = array();
			foreach ($rows as $c) {
				$aux = new Autoridad($c{'idautoridad'},$c{'nombre'},$c{'telefono'},$c{'email'},$c{'id_tipoautoridad'},$c{'id_usuario'});
				array_push($arrayAutoridad, $aux);
			}
			return $arrayAutoridad;
		}

		function showAutoridad($id){
			$rows = self::$db->getRows("SELECT * FROM autoridad WHERE idautoridad = ?", array("{$id}"));
			$ObjAutoridad = new Autoridad($rows[0]{'idautoridad'},$rows[0]{'nombre'},$rows[0]{'telefono'},$rows[0]{'email'},$rows[0]{'id_tipoautoridad'},$rows[0]{'id_usuario'});
			return $ObjAutoridad;
		}

		function updateAutoridad($id,$nombre,$telefono,$email,$id_tipoautoridad,$id_usuario){
			$insertRow = self::$db->updateRow("UPDATE public.autoridad SET nombre = ? , telefono = ? , email = ?, id_tipoautoridad = ?, id_usuario = ? WHERE idautoridad = ?", array ("{$nombre}","{$telefono}","{$email}","{$id_tipoautoridad}","{$id_usuario}",$id));

		}

		function deleteAutoridad($id){
			$deleteRow = self::$db->deleteRow("DELETE FROM public.autoridad WHERE idautoridad = ?" , array ("{$id}"));
		}

		function insertAutoridad($nombre,$telefono,$email,$id_tipoautoridad,$id_usuario) {
    $rows = self::$db->insertRow("INSERT INTO public.autoridad (nombre, telefono, email, id_tipoautoridad, id_usuario) VALUES (?,?,?,?,?)", array ("{$nombre}","{$telefono}","{$email}","{$id_tipoautoridad}","{$id_usuario}"));             
  }
	}

 ?>
