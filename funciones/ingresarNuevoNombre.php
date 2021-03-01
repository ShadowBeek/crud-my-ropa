<?php
// solicita variable con la conexion
require 'conexion.php'; //$mysqli

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];


$query = "insert into nom(name, apellido) values(?, ?)";


if ($stmt = $mysqli->prepare($query)) {
  $stmt->bind_param('ss', $nombre, $apellido);
  $stmt->execute();

  printf("rows inserted: %d\n", $stmt->affected_rows);
  $stmt->close();
  $mysqli->close();
  header("Location: ../index.php");
}

?>
