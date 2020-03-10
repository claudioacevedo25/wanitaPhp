<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="css/index.css">
    <title>Contacto || Wanita</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php include_once("header.php") ?>

    <div class="container">
        <form class="form-horizontal" method="post">
            <h1 class="text-center text-uppercase">Ponete en contacto con nosotros</h1>
            <fieldset class="contactenos">
                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                        <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                        <input id="lname" name="apellido" type="text" placeholder="Apellido" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                    <div class="col-md-8">
                        <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                    <div class="col-md-8">
                        <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-8">
                        <textarea class="form-control" id="message" name="message" placeholder="Coloque su mensaje aquí" rows="7"></textarea>
                    </div>
                </div>


                <div class="col-sm-9 col-sm-offset-3 form-group">
                    <button type="submit" class="btn  btn-lg btn-warning login-button boton">Enviar Consulta</button>
                </div>

            </fieldset>
        </form>
    </div>

    <?php include_once("footer.php") ?>

</body>

</html>