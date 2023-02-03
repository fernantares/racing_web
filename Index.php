<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Principal</title>
</head>
<body>
    <div class="main_container">
        <?php 
            include("template/navbar.php");
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
            <button class="btnBuscar"> BUSCAR </button>
        </div>
    </div>
</body>
</html>     