<?php

class TipoUsuario
{
    private $idtipousuario;
    private $tipo;
    
     function __construct($idtipousuario, $tipo) {
       $this->idtipousuario = $idtipousuario;
       $this->tipo = $tipo;
     }
    
     function setIdTipoUsuario($idtipousuario){
       $this->idtipousuario = $idtipousuario;
     } 
     function getIdTipoUsuario(){
       return $this->idtipousuario;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
}

?> 
