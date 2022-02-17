<?php
include_once('D:\xampp\htdocs\Modulos\Models\Colector.php');
$sql ="SELECT * FROM modulos";

$data = new Colector();
$datos = $data->consulta($sql)

?>