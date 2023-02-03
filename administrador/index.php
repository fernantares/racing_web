<!--***********INDEX ADMINISTRADOR*********-->
<?php 
    setcookie('titlepage','PRINCIPAL-ADMIN',0);
    include("template/header.php"); 
?>

        <div class="prueba">
            <form action="controler.php" method="post">
                <label for="make">Marca/Fabricante</label>  
                <input id="make" type="select" name="make">
                E-mail: 
                <input type="text" name="email">
                Website: 
                <input type="text" name="website">
                Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            </form>   
        </div>

<?php include("template/footer.php"); ?>