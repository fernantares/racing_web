<?php 

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "test"; /* Database name */

$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn ->connect_error) {
  die("Connection failed");
}

?>