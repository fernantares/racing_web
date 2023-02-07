<!--***********ADMINISTRADOR DE AUTOS********-->
<?php 
    $varTitle = "ADMINISTRAR FABRICANTES";
    include("template/header.php"); 
   
?>
    <div class="profile-container">
            <div class="profile-img-container"> 
            <img src="../img/profile_photo_default.png" alt="profileimg">
            </div>
            <div class="profile-name">DEFAULT PROFILE NAME </div>
        </div>
        <div class="dashboard">
            <?php //-----------------FILA--------------------------- ?>
            <div class="section">
                <div onClick="pageSelected('autos-admin');" class="dashboard-card">
                    <img src="../img/agregar_auto.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR AUTOS</div>
                </div>
                <div onClick="pageSelected('frabricantes-admin');" class="dashboard-card">
                    <img src="../img/agregar_fabricante.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR FABRICANTES</div>
                </div>
                <div onClick="pageSelected('modelos_admin');" class="dashboard-card">
                    <img src="../img/agregar_modelo.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR MODELOS</div>
                </div>        
            </div>
            <?php //-----------------FILA--------------------------- ?>
            <div class="section">
                <div id="add_car" class="dashboard-card">
                    <img src="../img/bujia.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR ARTICULOS</div>
                </div>
                <div id="add_make" class="dashboard-card">
                    PENDIENTE
                </div>
                <div id="add_model" class="dashboard-card">
                    PENDIENTE
                </div>        
            </div>
        </div>            


<?php include("template/footer.php"); ?>