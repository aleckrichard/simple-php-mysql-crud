<?php
//crear variable con los datos del servidor mysql y la BD llamada "crud"
$conectar = mysqli_connect('localhost', 'mi_usuario_mysql', 'mi_pass_mysql','crud');
// Check connection
if (isset($conectar)) {
    //echo "Conectado a la BD";
}else {
  die("Connection failed: " . mysqli_connect_error());
}
?>
