<!--***********INDEX ADMINISTRADOR*********-->
<?php 
    $varTitle = "ADMIN";
    include("template/header.php"); 
?>

        <div class="main-dashboard">
            <?php //-----------------SECCION AGREGAR--------------------------- ?>
            <div class="section">
                <div id="add_car" class="dashboard-card">
                    <img src="../img/agregar_auto.png" alt="AGREGAR AUTO">
                    <div class="descr">AGREGAR AUTO</div>
                </div>
                <div id="add_make" class="dashboard-card">
                    <img src="../img/agregar_fabricante.png" alt="AGREGAR AUTO">
                    <div class="descr">AGREGAR FABRICANTE</div>
                </div>
                <div id="add_model" class="dashboard-card">
                    <img src="../img/agregar_modelo.png" alt="AGREGAR AUTO">
                    <div class="descr">AGREGAR MODELO</div>
                </div>        
            </div>
            <?php //-----------------SECCION EDITAR--------------------------- ?>
            <div class="section">
                <div id="add_car" class="dashboard-card">
                    <img src="../img/agregar_auto.png" alt="AGREGAR AUTO">
                    <div class="descr">------</div>
                </div>
                <div id="add_make" class="dashboard-card">
                    <img src="../img/agregar_fabricante.png" alt="AGREGAR AUTO">
                    <div class="descr">-------</div>
                </div>
                <div id="add_model" class="dashboard-card">
                    <img src="../img/agregar_modelo.png" alt="AGREGAR AUTO">
                    <div class="descr">---------</div>
                </div>        
            </div>
        </div>    
                

<?php include("template/footer.php"); ?>