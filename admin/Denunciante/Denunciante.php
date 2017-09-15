<?php

class Denunciante
{
    private $id_denunciante;
    private $nombre;
    private $apellido;
    private $email;
    private $idusuario;
    
     function __construct($id_denunciante, $nombre, $apellido, $email, $idusuario) {
       $this->id_denunciante = $id_denunciante;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->email = $email;
       $this->idusuario = $idusuario;
     }
    
     function setIdDenunciante($id_denunciante){
       $this->id_denunciante = $id_denunciante;
     } 
     function getIdDenunciante(){
       return $this->id_denunciante;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     } 
}

?> 
