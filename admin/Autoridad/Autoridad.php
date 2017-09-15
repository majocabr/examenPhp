<?php

class Autoridad 
{
	private $idautoridad;
	private $nombre;
	private $telefono;
	private $email;
	private $id_tipoautoridad;
	private $id_usuario;

	function __construct($idautoridad,$nombre,$telefono,$email,$id_tipoautoridad,$id_usuario){
			$this->idautoridad = $idautoridad;
			$this->nombre = $nombre;
			$this->telefono = $telefono;
			$this->email = $email;
			$this->id_tipoautoridad = $id_tipoautoridad;
			$this->id_usuario = $id_usuario;
	}

	function setIdAutoridad($idautoridad){
		$this->idautoridad = $idautoridad;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setIdTipoAutoridad($id_tipoautoridad){
		$this->id_tipoautoridad = $id_tipoautoridad;
	}
	function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	function getIdAutoridad(){
		return $this->idautoridad;
	}
	function getNombre(){
		return $this->nombre;
	}
	function getTelefono(){
		return $this->telefono;
	}
	function getEmail(){
		return $this->email;
	}
	function getIdTipoAutoridad(){
		return $this->id_tipoautoridad;
	}
	function getIdUsuario(){
		return $this->id_usuario;
	}
}
?>
