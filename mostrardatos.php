<?php

require 'productos.php';

$productos= datos_productos();

foreach ($productos as $id){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Mostrar Productos Foreach</title>
</head>
<body class="row">
    <h1 class="text-center">Producto: <?php echo $id['id']?></h1>
    

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Código: <?php echo $id['id']?></h5>
    <p class="card-text">Nombre: <?php echo $id['nombre']?> </p>
    <p class="card-text">Nombre: <?php echo $id['precio']?> </p>
  </div>
</div>

<br>


<?php
}
?>

</body>
</html>
