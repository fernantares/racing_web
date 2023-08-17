
<?php 
    $varTitle = "REFERENCIAS";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
        <form name="formCross" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST"> 
            <input id="buscref" type="text" class="buscref" name="buscRef" placeholder="BUSCAR..." autofocus spellcheck="false">
        </form>
            <table class="tableCross">
                <thead>
                    <th class="headerblue">CÓDIGO</th>
                    <th class="headerblue">MARCA CODIGO</th>
                    <th class="headerblue">NÚMERO REFERENCIA</th>
                    <th class="headerblue">MARCA REFERENCIA</th>
                </thead>
                <tbody>
                    <?php  
                        if(isset($_POST['buscRef'])){
                        $databusc = $_POST['buscRef'];
                        $sqlcross = "Select a.code as codearticle, c.crosspart crosspartcross, m1.makepart makepartcross, m2.makepart makepartart from crosstable as c join articles as a on c.idarticle = a.idarticle join makeparttable as m1 on m1.idmakepart = c.idmakepartcross join makeparttable as m2 on m2.idmakepart = a.idmakepartarticles where a.code LIKE '%".$databusc."%' or c.crosspart LIKE '%".$databusc."%'";
                        $res = $conn->query($sqlcross);  
                        while(!is_null($row = $res->fetch_assoc())){ ?> 
                    <tr>
                        <td><?php echo $row['codearticle']; ?></td>
                        <td><?php echo $row['makepartart']; ?></td>
                        <td><?php echo $row['crosspartcross']; ?></td>
                        <td><?php echo $row['makepartcross']; ?></td>
                    </tr>
                        <?php  } 
                            $conn->close();                        
                        }?>

                </tbody>
            </table> 
   
<?php include("plantilla/footer.php"); ?>