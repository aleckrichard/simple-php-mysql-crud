<?php
include_once 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

if (isset($_POST['insertar'])) {
  $sql_insertar = "INSERT INTO usuarios (nombre, contrasena) VALUES ('$usuario', '$contrasena')";
  if (mysqli_query($conectar, $sql_insertar)) {
      echo "Registro Creado con éxito";
}else {
      echo "Error: " . $sql_insertar . "<br>" . mysqli_error($conectar);
}

// mysqli_close($conexion);
}
header('location:form.php');
 ?>
