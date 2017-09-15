<?php

class Parroquia
{
    private $idciudad;
    private $nombre;
    private $idparroquia; 
   

     function __construct($idparroquia, $nombre,$idciudad) {
       $this->idparroquia = $idparroquia;
       $this->idciudad=$idciudad;
      
       $this->nombre = $nombre;      
     }
           
 
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
     
     function setIdParroquia($idparroquia){
       $this->idparroquia =$idparroquia;
     } 

     function getIdParroquia(){
       return $this->idparroquia;
     } 
      
  
}

?> 
