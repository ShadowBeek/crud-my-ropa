<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];


$query = "insert into nom values(?, ?)";


if ($stmt = $mysqli->prepare($query)) {
  $stmt->bind_param('ss', $nombre, $apellido);
  $stmt->execute();

  printf("rows inserted: %d\n", $stmt->affected_rows);
  $stmt->close();
}

?>
