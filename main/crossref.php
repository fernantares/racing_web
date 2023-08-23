
<?php 
    $varTitle = "REFERENCIAS";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
        <form name="formCross" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="GET"> 
            <input id="buscref" type="text" class="buscref" name="numpart" placeholder="BUSCAR..." autofocus spellcheck="false">
        </form>
            <table class="tableCross">
                <thead>
                    <th class="headertable">MARCA</th>
                    <th class="headertable">CÓDIGO</th>
                    <th class="headertable">MARCA REFERENCIA</th>
                    <th class="headertable">NÚM REFERENCIA</th>
                </thead>
                <tbody>
                    <?php  
                        if(isset($_GET['numpart'])){
                        $databusc = $_GET['numpart'];
                        $res = $conn->execute_query(sqlcross(), ["%$databusc%","%$databusc%"]); 
                        while($row = $res->fetch_assoc()){ 
                    ?> 
                    <tr>
                        <td><?php echo $row['makepartart']; ?></td>
                        <td><?php echo $row['codearticle']; ?></td>
                        <td><?php echo $row['makepartcross']; ?></td>
                        <td><?php echo $row['crosspartcross']; ?></td>
                    </tr>
                    <?php
                    } 
                    $conn->close(); 
                    }
                    ?> 
                </tbody>
            </table> 
   
<?php include("plantilla/footer.php"); ?>