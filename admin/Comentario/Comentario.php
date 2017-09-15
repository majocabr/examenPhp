<?php 
	
	class Comentario
	{

		private $id_comentario;
		private $descripcion;
		private $id_denuncia;
		private $id_denunciante;

		function __construct($id_comentario, $descripcion, $id_denuncia, $id_denunciante){
			$this->id_comentario = $id_comentario;
			$this->descripcion = $descripcion;
			$this->id_denuncia = $id_denuncia;
			$this->id_denunciante = $id_denunciante;
		}

		function setIdComentario($id_comentario){
			$this->id_comentario = $id_comentario;
		}
		function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		function setIdDenuncia($id_denuncia){
			$this->id_denuncia = $id_denuncia;
		}
		function setIdDenunciante($id_denunciante){
			$this->id_denunciante = $id_denunciante;
		}

		function getIdComentario(){
			return $this->id_comentario;
		}

		function getDescripcion(){
			return $this->descripcion;
		}

		function getIdDenuncia(){
			return $this->id_denuncia;
		}

		function getIdDenunciante(){
			return $this->id_denunciante;
		}
	}
 ?>