<?php
//ADMINISTRADOR AUTOS
function caradmin(){
//$host = $_SERVER['HTTP_HOST'];
//$ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//$html = 'administrador/car_admin.php';
$hostdomain = "http://localhost/racing_web/";
$urladmincar = $hostdomain."car_admin.php";
header("Location: $urladmincar");
die();
}
caradmin();
?>