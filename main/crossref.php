
<?php 
    $varTitle = "REFERENCIAS";
    include("plantilla/header.php");
    require_once("../config.php");
?>

    <div class="crossmain">
        <form action="crossdata.php?=" method="get"> 
            <input href="" id="buscref" type="text" class="buscref" name="buscref" placeholder="BUSCAR REFERENCIAS..." autofocus spellcheck="false">
        </form>
        </div>
    <table class="tableCross">
        <tr>
        <th>Numero parte</th>
            <td> <?php if($row = $res->fetch_assoc())  
                   echo $row["code"];
                $conn->close(); ?> 
            </td>
        </tr>
        <tr class="spacer"><th><td></td></th></tr>
        <tr>
            <th>Marca</th>
            <td>US MOTOR</td>
            <th>Conversión</th>
            <td>US 7104</td>
        </tr>
    </table> 


<?php include("plantilla/footer.php"); ?>