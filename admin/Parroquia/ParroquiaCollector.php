<?php

include_once('Parroquia.php');
include_once('../Collector.php');

class ParroquiaCollector extends Collector
{
  
function showParroquias() {
   $rows = self::$db->getRows("SELECT * FROM parroquia");       
   $arrayParroquia= array();        
    foreach ($rows as $c){
      $aux = new Parroquia($c{'idparroquia'},$c{'nombre'},$c{'idciudad'});
      array_push($arrayParroquia, $aux);
    }
    return $arrayParroquia;        
  }

function showParroquia($id) {
$rows = self::$db->getRows("SELECT * FROM parroquia where idparroquia= ? ", array ("{$id}"));        
$ObjParroquia= new Parroquia($rows[0]{'idparroquia'},$rows[0]{'nombre'},$rows[0]{'idciudad'});
  return $ObjParroquia;        
}

function updateParroquia($id,$nombre,$idciudad) {
 $insertrow = self::$db->updateRow("UPDATE public.parroquia SET nombre= ?, idciudad= ? where idparroquia= ? ", array ("{$nombre}","{$idciudad}",$id));

}

function deleteParroquia($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.parroquia where idparroquia= ? ", array ("{$id}"));
}


function insertParroquia($nombre,$idciudad) {
  $rows = self::$db->insertRow("INSERT INTO public.parroquia(nombre,idciudad) VALUES (?,?)", array ("{$nombre}","{$idciudad}"));             
}


}
?>

