<?php

include_once('Provincia.php');
include_once('../Collector.php');

class ProvinciaCollector extends Collector
{
  
function showProvincias() {
   $rows = self::$db->getRows("SELECT * FROM provincia");       
   $arrayProvincia= array();        
    foreach ($rows as $c){
      $aux = new Provincia($c{'idprovincia'},$c{'nombre'});
      array_push($arrayProvincia, $aux);
    }
    return $arrayProvincia;        
  }

function showProvincia($id) {
$rows = self::$db->getRows("SELECT * FROM provincia where idprovincia= ? ", array ("{$id}"));        
$ObjProvincia= new Provincia($rows[0]{'idprovincia'},$rows[0]{'nombre'});
  return $ObjProvincia;        
}

function updateProvincia($id,$nombre) {
 $insertrow = self::$db->updateRow("UPDATE public.provincia SET nombre = ? where idprovincia= ? ", array ("{$nombre}",$id));

}

function deleteProvincia($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.provincia where idprovincia= ? ", array ("{$id}"));
}

function insertProvincia($nombre) {
  $rows = self::$db->insertRow("INSERT INTO public.provincia(nombre) VALUES (?)", array ("{$nombre}"));             
}

// function resetid($id){

//    $rowd =self::$db->reset("select setval('provincia_idprovincia_seq'',1)",array ("{$id}"));

// }
}


?>

