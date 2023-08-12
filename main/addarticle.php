
<?php 
    $varTitle = "AGREGAR ARTICULO";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
    <?php 
    if(isset($_POST['codetxt'])){
        $datacode = $_POST['codetxt'];
        $dataname = $_POST['nametxt'];
        $sqlarticles = "Insert into articles (code, name) values ('".$datacode."', '".$dataname."')";
        $res = $conn->query($sqlarticles);  }?>
    
        <form name="formAdd" action="addarticle.php" method="POST">
            <input class="inputAdd" id="codetxt" type="text" class="" name="codetxt" placeholder="NÚMERO PARTE" autocomplete="new-password" autofocus spellcheck="false">
            <input class="inputAdd" id="nametxt" type="text" class="" name="nametxt" placeholder="DESCRIPCION" autocomplete="new-password" autofocus spellcheck="false">
            <button type="submit hidden">AGREGAR</button>
        </form>

        <table class="tableAdd">
                <th>ID</th>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <tbody>
                   <?php $sqlarticles = "Select * from  articles";
                    $res = $conn->query($sqlarticles);  
                            
                     while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['idarticle']; ?></td>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                          </tr>
                          <?php }?> 
                </tbody>
            </table>

            <!-- CROSS REFERENCE -->

            <form name="formAdd" action="addarticle.php" method="POST">
            <input class="inputAdd" id="codetxt" type="text" class="" name="codetxt" placeholder="NÚMERO PARTE" autocomplete="new-password" autofocus spellcheck="false">
            <input class="inputAdd" id="nametxt" type="text" class="" name="nametxt" placeholder="DESCRIPCION" autocomplete="new-password" autofocus spellcheck="false">
            <button type="submit hidden">AGREGAR</button>
        </form>

        <table class="tableAdd">
                <th>ID</th>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <tbody>
                   <?php $sqlarticles = "Select * from  articles";
                    $res = $conn->query($sqlarticles);  
                            
                     while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['idarticle']; ?></td>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                          </tr>
                          <?php }?> 
                </tbody>
            </table>


    </div>

<?php include("plantilla/footer.php"); ?>