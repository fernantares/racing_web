
<?php 
    $varTitle = "REFERENCIAS";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
        <form name="formCross" action="crossref.php" method="POST"> 
            <input id="buscref" type="text" class="buscref" name="buscRef" placeholder="BUSCAR REFERENCIAS..." autofocus spellcheck="false">
        </form>
            <table class="tableCross">
                    <thead>
                    <th>NÚMERO PARTE</th>
                    <th>REFERENCIA</th>
                    <th>MARCA</th>
                    </thead>
                        <tbody>
                            
                            <?php  
                            if(isset($_POST['buscRef'])){
                            $databusc = $_POST['buscRef'];
                            $sqlarticles = "Select * from crosstable inner join articles on crosstable.idcode = articles.idarticle where code LIKE '%".$databusc."%' or crosspart LIKE '%".$databusc."%'";
                            $res = $conn->query($sqlarticles);  
                            while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td class="cellpart"><?php echo $row['code']; ?></td>
                            <td><?php echo $row['crosspart']; ?></td>
                            <td><?php echo $row['crossmake']; ?></td>
                          </tr>
                          <?php  } }?>
                            
                        </tbody>
            </table> 
    </div>
<?php include("plantilla/footer.php"); ?>