<?php

class Ciudad
{
    private $idciudad;
    private $nombre;
    private $idprovincia; 
    
     function __construct($idciudad, $nombre,$idprovincia) {
       $this->idciudad = $idciudad;
       $this->nombre = $nombre;
       $this->idprovincia = $idprovincia;   
     }
     
     // function __construct($idciudad,$nombre) {
     //   $this->idciudad = $idciudad;
     //   $this->nombre = $nombre;       
     // }

     // function __construct() {
     //      $this->idciudad = $idciudad;
     //   $this->nombre = $nombre;   
     // }
    
     function setIdCiudad($idciudad){
       $this->idciudad = $idciudad;
     } 
     function getIdCiudad(){
       return $this->idciudad;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
     function setIdProvincia($idprovincia){
       $this->idprovincia =$idprovincia;
     } 

     function getIdProvincia(){
       return $this->idprovincia;
     } 
     
}

?> 
