<?php

class Usuario
{
    private $idusuario;
    private $usuario;
    private $contrasenia;
    private $tipousuario;
    
     function __construct($idusuario, $usuario, $contrasenia, $tipousuario) {
       $this->idusuario = $idusuario;
       $this->usuario = $usuario;
       $this->contrasenia = $contrasenia;
       $this->tipousuario = $tipousuario;
     }
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     } 
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 
     function setContrasenia($contrasenia){
       $this->contrasenia = $contrasenia;
     } 
     function getContrasenia(){
       return $this->contrasenia;
     } 
     function setTipoUsuario($tipousuario){
       $this->tipousuario = $tipousuario;
     } 
     function getTipoUsuario(){
       return $this->tipousuario;
     }
}

?> 
