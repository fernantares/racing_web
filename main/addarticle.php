
<?php 
    $varTitle = "REFERENCIAS";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="crossmain">
        <form name="formCross" action="crossref.php" method="POST"> 
            <input id="buscref" type="text" class="buscref" name="buscRef" placeholder="BUSCAR REFERENCIAS..." autofocus spellcheck="false">
        </form>
            <table class="tableCross">
                    <th>Numero parte</th>
                    <th>MARCA Y REFERENCIA</th>
                        <tbody>
                            
                            <?php  
                            if(isset($_POST['buscRef'])){
                            $databusc = $_POST['buscRef'];
                            $sqlarticles = "Select * from crosstable inner join articles on crosstable.idcode = articles.idarticle where idcode = '".$databusc."' or crosspart = '".$databusc."'";
                            $res = $conn->query($sqlarticles);  
                            
                            while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['crossmake']; ?></td>
                            <td><?php echo $row['crosspart']; ?></td>
                          </tr>
                          <?php  } }?>
                            
                        </tbody>
            </table> 
    </div>
<?php include("plantilla/footer.php"); ?>