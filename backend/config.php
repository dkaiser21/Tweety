<?php
define("DB_HOST","localhost");
define("DB_NAME","twitter");
define("DB_USER","tweety");
define("DB_PASS","rdQuy]A6*HC[&k%");

$public_end=strpos($_SERVER['SCRIPT_NAME'],"/frontend");
$doc_root=substr($_SERVER['SCRIPT_NAME'],0,$public_end);
echo $doc_root;
define("WWW_ROOT",$doc_root);
//$servername="localhost";
//$username="tweety";
//$password="rdQuy]A6*HC[&k%";

?>