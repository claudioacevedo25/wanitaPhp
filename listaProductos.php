<?php
require_once('productos.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">

     <!-- Css -->
     <link rel="stylesheet" href="css/index.css">
    <title>Productos disponibles</title>
</head>

<body>
    <?php include_once("header.php") ?>
    <div class="container py-3">
        <!-- PRODUCTOS A LA VENTA -->
        <section class="row">
            <?php
            foreach ($productos as $key => $value) :
                ?>
                <article class="col-sm-12 col-md-6 col-lg-4">
                    <img class="img-fluid img-thumbnail" src=<?php echo $value['imagen'] ?> alt="">
                    <h2 class="nombre"><?php echo $value['titulo'] ?></h2>
                    <p><?php echo $value ['descripcion']?></p>
                    <p>Precio: $<?php echo $value['precio'] ?> </p>
                </article>
            <?php endforeach ?>
        </section>
    </div>
    <?php include_once("footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>