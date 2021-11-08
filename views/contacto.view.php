<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0">
    <title>App Venta Empanadas</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
    <!-- Centra todo el contenido -->
    <div class="container border">
        <!-- Definir fila -->
        <div class="row">
            <!-- Creando el header -->
            <header class="col-12 bg-primary text-white p-4 pl-5">
            <img src="https://media.istockphoto.com/vectors/empanadas-vector-vector-id486606660?k=20&m=486606660&s=612x612&w=0&h=gcNo71IwHyym2WWGIcVIbNi6tP41iz_z14R3UBe_Iwk="
                    width="80" height="80" alt="" class="rounded-circle">
                Empanadas
            </header>
            <!-- definiendo el menu -->
            <nav id="menu" class="col-12 navbar navbar-dark bg-dark p-0 pl-4">
                <!-- Creando la lista del menu -->
                <ul class="row w-50">
                    <li class="col-xs-12 col-sm-12 col-md"><a style="color:white" href="index.view.php">Inicio</a></li>
                    <li class="col-xs-12 col-sm-12 col-md"><a style="color:white" href="productos.view.php">Productos</a></li>
                    <li class="col-xs-12 col-sm-12 col-md"><a style="color:white" href="empresa.view.php">Empresa</a></li>
                    <li class="col-xs-12 col-sm-12 col-md"><a style="color:white" href="Contacto.php">Contacto</a></li>
                </ul>
            </nav>
            <!-- Creando el contenido -->
            <section id="content" class="col-12">
                <div class="row">
                    <section id="products" class="col border">
                        <!--  -->
                        <section>
                            <h1>Contactanos</h1>
                            <h6 style="text-align:justify">
                                <br>
                                <strong>teléfono:</strong> 3208532914
                                <br><br>
                                <strong>correo:</strong> jaop17@hotmail.com
                                <br><br>
                                <strong>Dirección:</strong> Cra 3 # 28N - 60, Popayán Cauca, Colombia
                            </h6>
                            <div class="row">
                                <div class="item col">
                                    <br>
                                    <img src="https://media.istockphoto.com/photos/people-making-line-to-buy-food-from-food-truck-picture-id1322851565?k=20&m=1322851565&s=612x612&w=0&h=FtGyGTuLeS16600mBJTF_lQu6NJjXP_a1ups1Cnz0r4="
                                        width="310" height="420">
                                </div>
                                <div class="item col-8">
                                    <!-- Formulario Contacto -->
                                    <h3 style="text-align:center">Formulario Contacto</h3>
                                    
                                    <!--Contenedor-->
                                    <div class="wrap">
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                            method="post">
                                            <!--Esto sirve para redirigir al usuario a la misma pagina -->
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                placeholder="Nombre"
                                                value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
                                            <!-- se utiliza php en el value para conservar los datos ingresados en el campo -->

                                            <input type="text" class="form-control" id="correo" name="correo"
                                                placeholder="Correo"
                                                value="<?php if(!$enviado && isset($correo)) echo $correo?>">

                                            <textarea name="mensaje" class="form-control" id="mensaje"
                                                placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

                                            <!-- nos permite conbinar la condicion en php con codigo html y valida que la variable errores no este vacia-->
                                            <?php if (!empty($errores)): ?>
                                            <div class="alert error">
                                                <?php echo $errores; ?>
                                            </div>
                                            <?php elseif($enviado): ?>
                                            <div class="alert succes">
                                                <p>Información enviada correctamente</p>
                                            </div>
                                            <?php endif ?>

                                            <input type="submit" name="submit" class="btn btn-primary"
                                                value="Enviar Correo">
                                        </form>
                                    </div>
                                    <!-- Fin Formulario contacto -->
                                </div>
                            </div>
                            <br><br>
                            <br>
                            <div class="row">
                                <div class="item col-4">

                                </div>
                            </div>
                </div>
            </section>
        </div>
        </section>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <!-- Pie de pagina -->
        <footer class="col-lg-12 bg-info h-40" style="text-align:center">
            Todos los derechos reservados &copy;
        </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>