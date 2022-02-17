<?php
include_once 'D:\xampp\htdocs\Modulos\Models\Conexion.php';
class Colector{
   function consulta($sql){
      $objeto = new Conexion();
      $conexion = $objeto->Conectar();
      $resultado = $conexion->prepare($sql);
      $resultado -> execute();
      $datos=$resultado->fetchALL(PDO::FETCH_ASSOC);

      return $datos;
   }
}
 ?>