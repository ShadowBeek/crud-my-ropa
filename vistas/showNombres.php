<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'librerias.php';?>
    <title>Document</title>
</head>
<body>
    <?php 
    require 'navbar.php';
    require '../funciones/conexion.php'; //$mysqli
        
    //escribir la query
    $query = "select * from nom";
    $row = "";
    //ejecutarla
    if($stmt = $mysqli->query($query)){
        //mostrar en renglones
        while($row = $stmt->fetch_row()){
            printf("%s %s\n", $row[1], $row[2]);
            //boton de editar
            echo "<form action='editar.php' method='POST'>
                    <input type='hidden' value='$row[0]' name='idnumber' id='idnumber'>
                    <input type='hidden' value='$row[1]' name='nombre' id='nombre'>
                    <input type='hidden' value='$row[2]' name='apellido' id='apellido'>
                    <button> editar </button>
                </form>";
            //boton de eliminar

            echo "<br>";
        }
    }else{
        echo "Error en la consulta";
    }

    /*
        prepare y execute solo se usan para ingresar datos a la bd
    */

    ?>

    <script> 
    //cada ves que se precione un boton 

    </script>


</body>
</html>
