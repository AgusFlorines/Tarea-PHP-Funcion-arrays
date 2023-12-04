<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAREA PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="./estilos.css">
  </head>
  <body>
    
  <h1><b>MIS PRODUCTOS</b></h1>
<?php

require 'productos.php';

  
    foreach(datos_productos() as $productos) {
    ?>

<div class="contenedor">
<div class="card" style="width: 18rem;">
    <?php echo '<img src="' . $productos['imagen'] . '" class="card-img-top d-flex align-items-center"">'; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $productos['nombre']?></h5>
            <a href="#" id = "boton" class="btn btn-primary"><?php echo 'precio: $'.$productos['precio'] ?></a>
        </div>
    </div>
    </div>
    <?php
    }
    ?>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

