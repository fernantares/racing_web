<?php 
$host = "localhost"; /* Host name */
$user = "bdadmin"; /* User */
$password = "Chivas1995."; /* Password */
$dbname = "test_car"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
  ?>