
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
                    <th class="headerblue">REFERENCIA</th>
                    <th class="headerblue">MARCA</th>
                </thead>
                <tbody>
                    <?php  
                        if(isset($_POST['buscRef'])){
                        $databusc = $_POST['buscRef'];
                        $sqlcross = "Select * from crosstable inner join articles on crosstable.idarticle = articles.idarticle inner join makepart on crosstable.idmakepart = makepart.idmakepart where code LIKE '%".$databusc."%' or crosspart LIKE '%".$databusc."%'";
                        $res = $conn->query($sqlcross);  
                        while(!is_null($row = $res->fetch_assoc())){ ?> 
                    <tr>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['crosspart']; ?></td>
                        <td><?php echo $row['makepart']; ?></td>
                    </tr>
                        <?php  } 
                            $conn->close();                        
                        }?>

                </tbody>
            </table> 
   
<?php include("plantilla/footer.php"); ?>