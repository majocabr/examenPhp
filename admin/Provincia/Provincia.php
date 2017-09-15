<?php

class Provincia
{
    private $idprovincia;
    private $nombre;
    
     function __construct($idprovincia, $nombre) {
       $this->idprovincia = $idprovincia;
       $this->nombre = $nombre;
     }
    
     function setIdProvincia($idprovincia){
       $this->idprovincia = $idprovincia;
     } 
     function getIdProvincia(){
       return $this->idprovincia;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
