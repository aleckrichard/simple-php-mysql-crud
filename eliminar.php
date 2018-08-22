<?php
include_once 'conexion.php';

if (isset($_GET['eliminar'])) {
  $eliminar_id = $_GET['eliminar'];
  $sql_eliminar = "DELETE FROM usuarios WHERE id=$eliminar_id";
  $ejecutar = mysqli_query( $conectar, $sql_eliminar ) or die ( "Algo ha ido mal en la consulta a la base de datos");

}
//redirigir a index
header('location:form.php');
 ?>
