<?php

require_once("../config.php");

if(isset($_POST["btnSend"])) {
    $databusc = $_POST['buscRef'];
    $sqlarticles = "Select code from articles where code = '".$databusc."'";
    $res = $conn->query($sqlarticles); 
    $row = $res->fetch_assoc();
    echo 
}

?>
