
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
                    <th class="headerblue">REFERENCIA</th>
                    <th class="headerblue">MARCA REFERENCIA</th>
                </thead>
                <tbody>
                    <?php  
                        if(isset($_POST['buscRef'])){
                        $databusc = $_POST['buscRef'];
                        $sqlcross = "Select articles.code, crosstable.crosspart , c1.makepart idmakepartcross, a1.makepart idmakepartarticles , from crosstable join articles on crosstable.idarticle = articles.idarticle join makepart c1 on crosstable.idmakepartcross = c1.idmakepart join makepart a1 on articles.idmakepartarticles = a1.idmakepart where articles.code LIKE '%".$databusc."%' or crosstable.crosspart LIKE '%".$databusc."%'";
                        $res = $conn->query($sqlcross);  
                        while(!is_null($row = $res->fetch_assoc())){ ?> 
                    <tr>
                        <td><?php echo $row['articles.code']; ?></td>
                        <td><?php echo $row['a1']; ?></td>
                        <td><?php echo $row['crosspart']; ?></td>
                        <td><?php echo $row['c1']; ?></td>
                    </tr>
                        <?php  } 
                            $conn->close();                        
                        }?>

                </tbody>
            </table> 
   
<?php include("plantilla/footer.php"); ?>