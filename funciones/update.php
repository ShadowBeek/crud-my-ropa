<?php
    //echo $_POST['nombre'];
    //echo $_POST['apellido'];
    //id
    //echo $_POST['idnumber'];
    //conexion
    require 'conexion.php';
    //query
    $query ="UPDATE nom SET name = ?, apellido = ? where id = ?";
    //ejecutar
    if($stmt= $mysqli->prepare($query)){
        //true
        $stmt->bind_param("ssi", $_POST['nombre'], $_POST['apellido'], $_POST['idnumber']);
        if($stmt->execute()){
            //redirigir
            header("Location: ../vistas/showNombres.php");
        }
    }else{
        echo "error al enviar datos";
    }
?>