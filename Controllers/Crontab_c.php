<?php
include_once('D:\xampp\htdocs\Modulos\Models\Colector.php');
$sql ="SELECT * FROM crontab";

$data = new Colector();
$datos = $data->consulta($sql)
?>