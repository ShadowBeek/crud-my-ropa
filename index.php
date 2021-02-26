<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include('vistas/navbar.php'); ?>
    <form action="funciones/ingresarNuevoNombre.php" method="POST">
        <label for="hola">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="ingresa nom">
        <label for="ola">apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="ingresa ap." >

        <input type="submit" value="Submit">
    </form>
</footer>
</html>
