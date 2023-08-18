
<?php 
    $varTitle = "AGREGAR REFERENCIA";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
      <div class="inputsdiv">
        <?php 
          if(isset($_POST['codelist'])){
            $datapart = $_POST['parttxt'];
            $datacodelist = $_POST['codelist'];
            $datamake = $_POST['makelist'];
            $sqlreference = "insert into crosstable (crosspart, idmakepartcross, idarticle) values ('".strtoupper($datapart)."', '".strtoupper($datamake)."', '".strtoupper($datacodelist)."')";
            $res = $conn->query($sqlreference); }?> 
        <form action="addreference.php" method="POST">
          <label class="labelreference" for="codelist"></label>
          <select autofocus class="inputAdd" name="codelist" id="codelist">
            <option disabled selected>ARTICULOS AGREGADOS</option>
              <?php  
              $sqlarticles = "Select * from articles order by idarticle  DESC";
              $res = $conn->query($sqlarticles);  
              while($row = $res->fetch_assoc()){ ?> 
              <option value="<?php echo $row['idarticle'] ?>"><?php echo $row['code'];?></option>
              <?php }?> 
          </select>
          <input class="inputAdd" id="parttxt" type="text" class="" name="parttxt" placeholder="NÚMERO REFERENCIA" autocomplete="new-password"  spellcheck="false">
          <select autofocus class="inputAdd" name="makelist" id="makelist">
            <option disabled selected>MARCA DE REFERENCIA</option>
              <?php
              $sqlmakepart = "Select * from makeparttable order by makepart ASC";
              $res = $conn->query($sqlmakepart);  
              while($row = $res->fetch_assoc()){ ?> 
              <option value="<?php echo $row['idmakepart'] ?>"><?php echo $row['makepart']; ?></option>
              <?php }?> 
          </select>
          <input class="btn btnaddreference" type="submit">
        </form>
      </div>
      <p style="color: red; font-size:20px;">Nota: El articulo ya tiene que estar registrado para poder agregarle su referencia.</p>
              <table class="tableAdd">
                <th>ARTICULO</th>
                <th>PARTE REFERENCIA</th>
                <th>MARCA REFERENCIA</th>
                <th>CATEGORIA</th>
                <tbody>
                   <?php $sqlcrosstable = "Select * from crosstable inner join articles on crosstable.idarticle = articles.idarticle inner join makeparttable on crosstable.idmakepartcross = makeparttable.idmakepart INNER JOIN subcategories on articles.idsubcat = subcategories.idsubcat order by idcross DESC";
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