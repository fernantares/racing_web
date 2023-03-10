<!--***********INDEX PUBLICO*********-->


<?php 
    $varTitle = "Principal";
    include("plantilla/header.php"); 
?>
        <div class="searcher">
            <select title="type" name="type" id="">
                <!--<option disabled  hidden value="">TIPO</option>-->
                <option selected value="0">AUTOS/CAMIONETAS</option>
                <option disabled style="color: gray;" value="1">Motos(en construcción)</option>
            </select>
            <select name="year" id="">
                <option disabled selected hidden value="">AÑO</option>
            </select>
            <select name="make" id=""> 
                <option disabled selected hidden value="">MARCA</option>
            </select>
            <select name="model" id=""> 
                <option disabled selected hidden value="">MODELO</option>
            </select>
            <select name="motor" id="">
                <option disabled selected hidden value="">MOTOR</option>
            </select>
            <button class="btn btnSearcher">BUSCAR</button>
        </div>
  
<?php include("plantilla/footer.php"); ?>