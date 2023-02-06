<!--***********INDEX ADMINISTRADOR*********-->
<?php 
    $varTitle = "ADMIN";
    include("template/header.php"); 
?>
    <div class="admin-container">
        <div class="sidebar">
            <div class="profile-info" >
                <div class="profile-img"> 
                <img src="../img/profile_photo_default.png" alt="profileimg">
                </div>
                <div class="info">DEFAULT PROFILE NAME </div>
            </div>
        </div>
        <div class="dashboard">
            <?php //-----------------FILA--------------------------- ?>
            <div class="section">
                <div id="add_car" class="dashboard-card">
                    <img src="../img/agregar_auto.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR AUTOS</div>
                </div>
                <div id="add_make" class="dashboard-card">
                    <img src="../img/agregar_fabricante.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR FABRICANTES</div>
                </div>
                <div id="add_model" class="dashboard-card">
                    <img src="../img/agregar_modelo.png" alt="AGREGAR AUTO">
                    <div class="descr">ADMINISTRAR MODELOS</div>
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
    </div>            

<?php include("template/footer.php"); ?>