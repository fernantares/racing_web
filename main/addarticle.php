
<?php 
    $varTitle = "AGREGAR ARTICULO";
    include("../config.php");
    include("plantilla/header.php");
?>

    <div class="main">
    <?php 
    if(isset($_POST['codetxt'])){
        $datacode = $_POST['codetxt'];
        $datamake = $_POST['makelist'];
        $datasubcat = $_POST['subcategorieslist'];
        $sqlarticlesadd = "Insert into articles (code, idmakepartarticles, idsubcat) values ('".strtoupper($datacode)."', '".$datamake."','".$datasubcat."')";
        $res = $conn->query($sqlarticlesadd);  }?>
    
        <form name="formAdd" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST">
            <input class="inputAdd" id="codetxt" type="text" class="" name="codetxt" placeholder="CODIGO ARTICULO" autocomplete="new-password" required autofocus spellcheck="false">
            <select autofocus class="inputAdd" name="makelist" id="makelist">
                <option disabled selected>MARCA ARTICULO</option>
                <?php
                $sqlmakepart = "Select * from makeparttable order by makepart ASC";
                $res = $conn->query($sqlmakepart);  
                while($row = $res->fetch_assoc()){ ?> 
                <option value="<?php echo $row['idmakepart'] ?>"><?php echo $row['makepart']; ?></option>
                <?php }?> 
              </select>
            <select autofocus class="inputAdd" name="subcategorieslist" id="subcatlist">
            <option disabled selected>SELECCIONA CATEGORIA ARTICULO</option>
                <?php
                $sqlsubcat = "Select * from subcategories order by subcategorie";
                $res = $conn->query($sqlsubcat);  
                while($row = $res->fetch_assoc()){ ?> 
                <option value="<?php echo $row['idsubcat'] ?>"><?php echo $row['subcategorie']; ?></option>
                <?php }?> 
            </select>
            <button class="btn" type="submit hidden">AGREGAR</button>
        </form>

        <table class="tableAdd">
                <th>CODIGO</th>
                <th>MARCA</th>
                <th>CATEGORIA</th>
                <tbody>
                   <?php $sqlarticles = "Select * from  articles inner join subcategories on articles.idsubcat = subcategories.idsubcat inner join makeparttable on articles.idmakepartarticles = makeparttable.idmakepart order by idarticle DESC";
                    $res = $conn->query($sqlarticles);  
                            
                     while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['makepart']; ?></td>
                            <td><?php echo $row['subcategorie']; ?></td>
                          </tr>
                          <?php }?> 
                </tbody>
            </table>

           
<?php include("plantilla/footer.php"); ?>