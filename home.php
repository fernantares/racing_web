<?php
$host = $_SERVER['HTTP_HOST'];
$ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$html = 'main/';
$url = "http://$host$ruta/$html";
header("Location: $url");
die();
?>