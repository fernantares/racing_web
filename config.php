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

function sqlcross(){
  $sqlcrossreference = "Select a.code as codearticle, c.crosspart crosspartcross, m1.makepart makepartcross, m2.makepart makepartart 
  from crosstable as c 
  join articles as a on c.idarticle = a.idarticle 
  join makeparttable as m1 on m1.idmakepart = c.idmakepartcross 
  join makeparttable as m2 on m2.idmakepart = a.idmakepartarticles
  where a.code LIKE ? or c.crosspart LIKE ?";
  return $sqlcrossreference;
};

?>