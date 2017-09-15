<?php

class Denuncia
{
    private $id_denuncia;
    private $titulo;
    private $descripcion;
    private $fecha_publicacion;
    private $fecha_ejecucion;
    private $id_denunciante;
    private $id_ciudad;
    private $id_parroquia;
    private $id_categoria;
    private $id_estado_denuncia;
    private $id_autoridad;
    private $imagen;
    
     function __construct($id_denuncia, $titulo, $descripcion, $fecha_publicacion,$fecha_ejecucion, $id_denunciante, $id_ciudad, $id_parroquia,$id_categoria,$id_estado_denuncia,$id_autoridad,$imagen) {
       $this->id_denuncia = $id_denuncia;
       $this->titulo = $titulo;
       $this->descripcion = $descripcion;
       $this->fecha_publicacion = $fecha_publicacion;
       $this->fecha_ejecucion = $fecha_ejecucion;
       $this->id_denunciante=$id_denunciante;
       $this->id_ciudad=$id_ciudad;
       $this->id_parroquia=$id_parroquia;
       $this->id_categoria=$id_categoria;
       $this->id_estado_denuncia=$id_estado_denuncia;
       $this->id_autoridad=$id_autoridad;
       $this->imagen=$imagen;

     }
    
     function setIdDenuncia($id_denuncia){
       $this->id_denuncia = $id_denuncia;
     } 
     function getIdDenuncia(){
       return $this->id_denuncia;
     } 
     function setTitulo($titulo){
       $this->titulo = $titulo;
     } 
     function getTitulo(){
       return $this->titulo;
     } 

     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
     function setFechaPublicacion($fecha_publicacion){
       $this->fecha_publicacion = $fecha_publicacion;
     } 
     function getFechaPublicacion(){
       return $this->fecha_publicacion;
     } 
     function setFechaEjecucion($fecha_ejecucion){
       $this->fecha_ejecucion = $fecha_ejecucion;
     } 
     function getFechaEjecucion(){
       return $this->fecha_ejecucion;
     } 
     function setIdDenunciante($id_denunciante){
       $this->id_denunciante = $id_denunciante;
     } 
     function getIdDenunciante(){
       return $this->id_denunciante;
     } 
     function setIdCiudad($id_ciudad){
       $this->id_ciudad = $id_ciudad;
     } 
     function getIdCiudad(){
       return $this->id_ciudad;
     } 

     function setIdParroquia($id_parroquia){
       $this->id_parroquia = $id_parroquia;
     } 
     function getIdParroquia(){
       return $this->id_parroquia;
     } 
      function setIdCategoria($id_categoria){
       $this->id_categoria = $id_categoria;
     } 
     function getIdCategoria(){
       return $this->id_categoria;
     } 
      function setIdEstadoDenuncia($id_estado_denuncia){
       $this->id_estado_denuncia = $id_estado_denuncia;
     } 
     function getIdEstadoDenuncia(){
       return $this->id_estado_denuncia;
     } 
      function setIdAutoridad($id_autoridad){
       $this->id_autoridad = $id_autoridad;
     } 
     function getIdAutoridad(){
       return $this->id_autoridad;
     } 

      function setImagen($imagen){
       $this->imagen= $imagen;
     } 
     function getImagen(){
       return $this->imagen;
     }
}

?> 
