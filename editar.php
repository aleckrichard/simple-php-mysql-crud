<?php
include_once 'conexion.php';

if (isset($_GET['editar'])) {
  $editar_id = $_GET['editar'];
  $sql_editar = "SELECT * FROM usuarios WHERE id=$editar_id";
  $ejecutar = mysqli_query( $conectar, $sql_editar ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $fila = mysqli_fetch_array($ejecutar);

  $id = $fila['id'];
  $usuario = $fila['nombre'];
  $password = $fila['contrasena'];
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 <title>Hello, world!</title>
</head>
   <body>

     <div class="content">
       <div class="row">
         <div class="col-md-1">

         </div>
         <div class="col-md-8">
           <form class="" action="" method="post">
             <div class="form-group">
         <label for="exampleInputEmail1">Email address</label>
         <input type="text" class="form-control" name="nombre"  value="<?php echo $usuario; ?>">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
         <input type="text" class="form-control" name="contrasena" value="<?php echo $password; ?>">
       </div>
       <button type="submit" class="btn btn-primary" name="actualizar">Actualizar Datos</button>

           </form>
         </div>
       </div>

<?php
if (isset($_POST['actualizar'])) {
  $actualizar_nombre = $_POST['nombre'];
  $actualizar_password = $_POST['contrasena'];


  $sql_actualizar = "UPDATE usuarios SET nombre='$actualizar_nombre', contrasena='$actualizar_password' WHERE id=$editar_id";
  $ejecutar = mysqli_query( $conectar, $sql_actualizar ) or die ( "Error en la consulta");

  if ($ejecutar) {
    echo " <script>alert('Datos actualizados')</script> ";
    echo " <script>window.open('form.php', '_self' )</script> ";
  }
}

 ?>



       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
 </html>
