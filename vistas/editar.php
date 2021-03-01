<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require 'librerias.php';
        require 'navbar.php';
    ?>
</head>
<body>

    <?php
        //echo ($_POST['idnumber']);
    ?>

    <h1>Editar <?php echo($_POST['nombre']);?> </h1>
    <form action="../funciones/update.php" method="POST">
        <label for="hola">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="<?php echo($_POST['nombre']);?>">
        <label for="ola">apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="<?php echo($_POST['apellido']);?>" >
        <input type="hidden" name="idnumber" id="idnumber" value="<?php echo$_POST['idnumber'] ?>">
        <input type="submit" value="Submit">
    </form>    
</body>
</html>



<?php
    //echo($_POST['nombre']);
    //echo($_POST['apellido']);
?>