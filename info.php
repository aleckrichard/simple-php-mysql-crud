<?php
include_once 'conexion.php';

if (isset($_GET['ver'])) {
  $editar_id = $_GET['ver'];
  $sql_editar = "SELECT * FROM usuarios WHERE id=$editar_id";
  $ejecutar = mysqli_query( $conectar, $sql_editar ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $fila = mysqli_fetch_array($ejecutar);

  $id = $fila['id'];
  $nombre = $fila['nombre'];
  $email = $fila['email'];
  $puesto= $fila['puesto'];
  $fono = $fila['fono'];
  $direccion = $fila['direccion'];
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
 <link rel="stylesheet" href="css/estilos.css">
 <title>Hello, world!</title>
</head>
   <body>
   <div class="container mt-5">
   <nav>
   <div align="right"><a align="right" href="form.php" class="btn btn-primary">Lista de Empleados</a></div>
   
   </nav>
   <div class="row">
   <div class"col-md-12">
   <div class="card">
    <img class="card-img-top" src="img/user.png" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title"><?php echo $nombre; ?></h3>
      <p class="card-text"><h5 class="text-muted"><?php echo $puesto; ?></h5></p>
      <p class="card-text"><h5 align="left" ><i class="fa fa-at"></i><?php echo "  " . $email; ?></h5></p>
      <p class="card-text"><h5 align="left" ><i class="fa fa-phone"></i><?php echo "  " . $fono; ?></h5></p>
      <p class="card-text"><h5 align="left" ><i class="fa fa-map-marker-alt"></i><?php echo "  " . $direccion; ?></h5></p>
      <a align="right" href="editar.php?editar=<?php echo $id ?>" <p class="card-text"><button>Editar</button></p></a>
    </div>
   </div>
   </div>
   </div>
   </div>
   

       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
 </html>
