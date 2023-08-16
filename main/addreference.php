
<?php 
    $varTitle = "AGREGAR REFERENCIA";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
            <?php 
            if(isset($_POST['codeList']))
            {
              $datalist = $_POST['codeList'];
              $datapart = $_POST['parttxt'];
              $datamake = $_POST['maketxt'];
            $sqlreference = "Insert into crosstable (crosspart, crossmake, idcode) values ('".$datapart."', '".$datamake."', '".$datalist."')";
            $res = $conn->query($sqlreference); }?> 
            
            <form action="addreference.php" method="POST">
            <label class="labelreference" for="codeList">Seleccionar articulo:</label>
            <select autofocus class="inputAdd" name="codeList" id="codeList">
                 <?php $sqlarticles = "Select * from articles";
                    $res = $conn->query($sqlarticles);  
                     while($row = $res->fetch_assoc()){ ?> 
                            <option value="<?php echo $row['idarticle'] ?>"><?php echo $row['code']; ?></option>
                          <?php }?> 
            </select>
                          <input class="inputAdd" id="parttxt" type="text" class="" name="parttxt" placeholder="PARTE REFERENCIA" autocomplete="new-password"  spellcheck="false">
                          <input class="inputAdd" id="maketxt" type="text" class="" name="maketxt" placeholder="MARCA DE PARTE" autocomplete="new-password"  spellcheck="false">   
            <input class="btn" value="sumbit" type="submit">
            </form>

              <table class="tableAdd">
                <th>NUMERO RACING</th>
                <th>PARTE REFERENCIA</th>
                <th>MARCA</th>
                <tbody>
                   <?php $sqlarticles = "Select * from crosstable inner join articles on crosstable.idcode = articles.idarticle";
                    $res = $conn->query($sqlarticles);  
                            
                     while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['crosspart']; ?></td>
                            <td><?php echo $row['crossmake']; ?></td>
                          </tr>
                          <?php }?> 
                </tbody>
            </table>


    </div>

<?php include("plantilla/footer.php"); ?>