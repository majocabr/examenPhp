<?php

include_once('Categoria.php');
include_once('../Collector.php');

class CategoriaCollector extends Collector
{
  
  function showCategorias() {
    $rows = self::$db->getRows("SELECT idcategoria,nombre FROM categoria ");        
    $arrayCategoria= array();        
    foreach ($rows as $c){
      $aux = new Categoria($c{'idcategoria'},$c{'nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

function UpdateCategoria($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.categoria SET nombre = ? where idcategoria= ? ", array ("{$nombre}",$id));

}
function deleteCategoria($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.categoria where idcategoria= ? ", array ("{$id}"));

}

function insertCategoria($nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.categoria(nombre) VALUES (?)", array ("{$nombre}"));             
  }

}
?>
