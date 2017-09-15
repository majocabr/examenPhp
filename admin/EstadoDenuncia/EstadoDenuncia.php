<?php

class EstadoDenuncia
{
    private $id_estado_denuncian;
    private $nombre;

    
     function __construct($id_estado_denuncia, $nombre) {
       $this->id_estado_denuncia = $id_estado_denuncia;
       $this->nombre = $nombre;
      
     }
    
     function setIdEstadoDenuncia($id_estado_denuncia){
       $this->id_estado_denuncia = $id_estado_denuncia;
     } 
     function getIdEstadoDenuncia(){
       return $this->id_estado_denuncia;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

}

?> 
