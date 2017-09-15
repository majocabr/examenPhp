<?php 
	
	class TipoAutoridad
	{

		private $id_tipo_autoridad;
		private $nombre;

		function __construct ($id_tipo_autoridad,$nombre){
			$this->id_tipo_autoridad = $id_tipo_autoridad;
			$this->nombre = $nombre;
		}

		function setIdAutoridad($id_tipo_autoridad){
			$this->id_tipo_autoridad = $id_tipo_autoridad;
		}
		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function getIdTipoAutoridad(){
			return $this->id_tipo_autoridad;
		}
		function getNombre(){
			return $this->nombre;
		}
	}
?>