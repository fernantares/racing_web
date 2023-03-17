
<?php 
    $varTitle = "REFERENCIAS";
    include("plantilla/header.php");
    include("crossdata.php");
?>

    <div class="crossmain">
        <form name="formcross" action="crossdata.php" method="POST"> 
            <input id="buscref" type="text" class="buscref" name="buscRef" placeholder="BUSCAR REFERENCIAS..." autofocus spellcheck="false">
            <button type="Submit" name="btnSend">PRUEBA</button>
        </form>
       
    <table class="tableCross">
        <tr>
        <th>Numero parte</th>
            <td name="dataPart"></td>
        </tr>
        <tr class="spacer"><th><td></td></th></tr>
        <tr>
            <th>Marca</th>
            <td>US MOTOR</td>
            <th>Conversión</th>
            <td>US 7104</td>
        </tr>
    </table> 
    </div>
<?php include("plantilla/footer.php"); ?>