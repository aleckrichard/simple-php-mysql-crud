<?php
include_once 'conexion.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$puesto = $_POST['puesto'];
$fono = $_POST['fono'];
$direccion = $_POST['direccion'];
// $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

if (isset($_POST['insertar'])) {
  $sql_insertar = "INSERT INTO usuarios (nombre, email, puesto, fono, direccion) VALUES ('$usuario', '$email', '$puesto', '$fono', '$direccion')";
  if (mysqli_query($conectar, $sql_insertar)) {
      echo "Registro Creado con éxito";
}else {
      echo "Error: " . $sql_insertar . "<br>" . mysqli_error($conectar);
}

// mysqli_close($conexion);
}
header('location:form.php');
 ?>
