<!--***********ADMINISTRADOR*********-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <title>Admin</title>
</head>
<body>
    <div class="main_container">
        <?php 
            include("../template/navbar.php");
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
</body>
</html>