
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
        $datasubcat = $_POST['subcategorieslist'];
        $sqlarticles = "Insert into articles (code, name, idsubcat) values ('".strtoupper($datacode)."', '".strtoupper($dataname)."','".strtoupper($datacode)."')";
        $res = $conn->query($sqlarticles);  }?>
    
        <form name="formAdd" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST">
            <input class="inputAdd" id="codetxt" type="text" class="" name="codetxt" placeholder="NÚMERO PARTE" autocomplete="new-password" required autofocus spellcheck="false">
            <select placeholder autofocus class="inputAdd" name="subcategorieslist" id="codeList">
                <?php
                $sqlsubcat = "Select * from subcategories";
                $res = $conn->query($sqlsubcat);  
                while($row = $res->fetch_assoc()){ ?> 
                <option value="<?php echo $row['idsubcat'] ?>"><?php echo $row['subcategorie']; ?></option>
                <?php }?> 
            </select>
            <button class="btn" type="submit hidden">AGREGAR</button>
        </form>

        <table class="tableAdd">
                <th>CODIGO</th>
                <th>CATEGORIA</th>
                <tbody>
                   <?php $sqlarticles = "Select * from  articles inner join subcategories on articles.idsubcat = subcategories.idsubcat order by code ASC";
                    $res = $conn->query($sqlarticles);  
                            
                     while($row = $res->fetch_assoc()){ ?> 
                          <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['subcategorie']; ?></td>
                          </tr>
                          <?php }?> 
                </tbody>
            </table>

           
<?php include("plantilla/footer.php"); ?>