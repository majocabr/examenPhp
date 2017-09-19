<?php

include_once('Denuncia.php');
include_once('../Collector.php');

class DenunciaCollector extends Collector
{
  
  function showDenuncias() {
    $rows = self::$db->getRows("SELECT * FROM denuncia ");        
    $arrayDenuncia= array();        
    foreach ($rows as $c){
      $aux = new Denuncia($c{'id_denuncia'},$c{'titulo'},$c{'descripcion'},$c{'fecha_publicacion'},$c{'fecha_ejecucion'},$c{'id_denunciante'},$c{'id_ciudad'},$c{'id_parroquia'},$c{'id_categoria'},$c{'id_estado_denuncia'},$c{'id_autoridad'},$c{'imagen'});
      array_push($arrayDenuncia, $aux);
    }
    return $arrayDenuncia;        
  }
function showDenuncia($id) {
    $rows = self::$db->getRows("SELECT * FROM denuncia where id_denuncia= ? ", array ("{$id}"));        
$ObjDenuncia= new Denuncia($rows[0]{'id_denuncia'},$rows[0]{'titulo'},$rows[0]{'descripcion'},$rows[0]{'fecha_publicacion'},$rows[0]{'fecha_ejecucion'},$rows[0]{'id_denunciante'},$rows[0]{'id_ciudad'},$rows[0]{'id_parroquia'},$rows[0]{'id_categoria'},$rows[0]{'id_estado_denuncia'},$rows[0]{'id_autoridad'},$rows[0]{'imagen'});
    
    return $ObjDenuncia;        
  }
function updateDenuncia($id,$titulo, $descripcion, $fecha_publicacion, $fecha_ejecucion, $id_denunciante,$id_ciudad,$id_parroquia, $id_categoria, $id_estado_denuncia, $id_autoridad, $imagen) {
    $insertrow = self::$db->updateRow("UPDATE public.denuncia SET titulo = ?, descripcion = ?, fecha_publicacion = ?, fecha_ejecucion = ?, id_denunciante = ?,id_ciudad = ?, id_parroquia = ? , id_categoria = ? , id_estado_denuncia = ? , id_autoridad = ? , imagen = ?  where id_denuncia= ? ", array ("{$titulo}","{$descripcion}","{$fecha_publicacion}","{$fecha_ejecucion}","{$id_denunciante}","{$id_ciudad}","{$id_parroquia}","{$id_categoria}","{$id_estado_denuncia}","{$id_autoridad}","{$imagen}",$id));

}
function deleteDenuncia($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.denuncia where id_denuncia= ? ", array ("{$id}"));

}
function insertDenuncia($titulo, $descripcion, $fecha_publicacion, $fecha_ejecucion, $id_denunciante,$id_ciudad,$id_parroquia, $id_categoria, $id_estado_denuncia, $id_autoridad, $imagen) {
    $rows = self::$db->insertRow("INSERT INTO public.denuncia(titulo,descripcion,fecha_publicacion,fecha_ejecucion,id_denunciante,id_ciudad,id_parroquia,id_categoria,id_estado_denuncia,id_autoridad,imagen) VALUES (?,?,?,?,?,?,?,?,?,?,?)", array ("{$titulo}","{$descripcion}","{$fecha_publicacion}","{$fecha_ejecucion}","{$id_denunciante}","{$id_ciudad}","{$id_parroquia}","{$id_categoria}","{$id_estado_denuncia}","{$id_autoridad}","{$imagen}"));             
  }


}
?>
