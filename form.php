
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

  <div class="container mt-5">
      <h1>Simple CRUD en PHP y MYSQL</h1>
      <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Crear Empleado
  </a>
  </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="row">
    <div class="col-md-4">
      <form class="" action="registro.php" method="post">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" name="usuario"  placeholder="Ex: John Doe" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="usuario@mail.com" required>
        </div>
        <div class="form-group">
          <label>Puesto</label>
          <input type="text" class="form-control" name="puesto" placeholder="Ing. en Sistemas" required>
        </div>
        <div class="form-group">
          <label>Fono</label>
          <input type="tel" class="form-control" name="fono" placeholder="912345678" pattern="[0-9]{9}" required>
        </div>
        <div class="form-group">
          <label>Direccion</label>
          <input type="text" class="form-control" name="direccion" placeholder="Av calle 1234" required>
        </div>
        <button type="submit" class="btn btn-primary" name="insertar">Registrar</button>
      </form>
    </div>
  </div>
  </div>
</div>
  <div class="col-md-12 col-md-offset-2">
  <h3>Lista de Empleados</h3>
  <table id="tabla" class="table display">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Puesto</th>
      <th scope="col">Fono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
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
$nombre = $fila['nombre'];
$email = $fila['email'];
$puesto = $fila['puesto'];
$fono = $fila['fono'];
$direccion = $fila['direccion'];
// $i++;

 ?>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $nombre; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $puesto; ?></td>
      <td><?php echo $fono; ?></td>
      <td><?php echo $direccion; ?></td>
      <td><a href="editar.php?editar=<?php echo $id ?>" class="float-center ml-2"><i class="fas fa-pen" style="color:#FFC107"></i></a>&nbsp;&nbsp;<a href="eliminar.php?eliminar=<?php echo $id ?>" class="float-center ml-2"><i class="fas fa-trash" style="color:#F44336"></i></a>&nbsp;&nbsp;<a href="info.php?ver=<?php echo $id ?>" class="float-center ml-2"><i class="fas fa-eye"></i></a></td>
    </tr>
  </tbody>
  <?php }  ?>
</table>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
