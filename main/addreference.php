
<?php 
    $varTitle = "AGREGAR REFERENCIA";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
      <div class="inputsdiv">
        <?php 
          if(isset($_POST['codeList'])){
            $datapart = $_POST['parttxt'];
            $datalist = $_POST['codelist'];
            $datamake = $_POST['maketxt'];
            $sqlreference = "Insert into crosstable (crosspart, idmakepart, idcode) values ('".$datapart."', '".$datamake."', '".$datalist."')";
            $res = $conn->query($sqlreference); }?> 
        <form action="addreference.php" method="POST">
              <label class="labelreference" for="codeList"></label>
              <select autofocus class="inputAdd" name="codelist" id="codelist">
                <option disabled selected>SELECCIONA ARTICULO</option>
                 <?php  
                  $sqlarticles = "Select * from articles";
                  $res = $conn->query($sqlarticles);  
                  while($row = $res->fetch_assoc()){ ?> 
                  <option value="<?php echo $row['idarticle'] ?>"><?php echo $row['code']; ?></option>
                  <?php }?> 
                </select>
              <input class="inputAdd" id="parttxt" type="text" class="" name="parttxt" placeholder="AGREGA REFERENCIA" autocomplete="new-password"  spellcheck="false">
              <select autofocus class="inputAdd" name="makelist" id="makelist">
                <option disabled selected>SELECCIONA MARCA</option>
                <?php
                $sqlmakepart = "Select * from makepart order by makepart ASC";
                $res = $conn->query($sqlmakepart);  
                while($row = $res->fetch_assoc()){ ?> 
                <option value="<?php echo $row['idmakepart'] ?>"><?php echo $row['makepart']; ?></option>
                <?php }?> 
              </select>
              <input class="btn btnaddreference" value="sumbit" type="submit">
            </form>
        </div>
              <table class="tableAdd">
                <th>NUMERO RACING</th>
                <th>PARTE REFERENCIA</th>
                <th>MARCA</th>
                <th>CATEGORIA</th>
                <tbody>
                   <?php $sqlcrosstable = "Select * from crosstable inner join articles on crosstable.idcode = articles.idarticle inner join makepart on crosstable.idmakepart = makepart.idmakepart INNER JOIN subcategories on articles.idsubcat = subcategories.idsubcat";
                    $res = $conn->query($sqlcrosstable);  
                            
                     while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['crosspart']; ?></td>
                            <td><?php echo $row['makepart']; ?></td>
                            <td><?php echo $row['subcategorie']; ?></td>
                          </tr>
                          <?php }?> 
                </tbody>
            </table>
   

<?php include("plantilla/footer.php"); ?>