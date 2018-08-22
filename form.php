
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Crud PHP y MYSQL</title>
  </head>
  <body>
    <div class="container">
      <br>
      <h1>Simple CRUD en PHP y MYSQL</h1>
  <div class="row">
    <div class="col-md-4">
      <form class="" action="registro.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" name="usuario"  placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="contrasena" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="insertar">Submit</button>
      </form>
    </div>
  </div>
  <br><br>
  <div class="col-md-8 col-md-offset-2">
  <h3>Mostrar registros</h3>
    <table class="table table-bordered table-responsive">
      <tr>
        <td>ID</td>
  			<td>Usuario</td>
  			<td>Password</td>
  			<td>Editar</td>
        <td>Eliminar</td>
      </tr>

<!-- Mostrar datos en la tabla mediante php -->
<?php
include_once 'conexion.php';
$consulta = "SELECT * FROM usuarios";

$resultado = mysqli_query( $conectar, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$i = 0;

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($fila = mysqli_fetch_array( $resultado ))
{
$id = $fila['id'];
$usuario = $fila['nombre'];
$password = $fila['contrasena'];
// $i++;

 ?>

      <tr>
        <td><?php echo $id; ?> </td>
  			<td><?php echo $usuario; ?></td>
  			<td><?php echo $password; ?></td>
  			<td><a href="editar.php?editar=<?php echo $id ?>" class="float-center ml-2"><i class="fas fa-edit"></i></a></td>
        <td><a href="eliminar.php?eliminar=<?php echo $id ?>" class="float-center ml-2"><i class="fas fa-trash"></i></a></td>
      </tr>
<?php }  ?>
    </table>
  </div>
</div>
  </body>
</html>
