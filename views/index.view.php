<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-scale=1.0">
    <title>App Venta Empanadas</title>
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

            <nav id="menu" class="col-12 navbar navbar-dark bg-dark p-0 pl-4
                                  d-none d-sm-none d-md-block">
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
                        <div class="items">
                            <!--  -->
                            <div class="row">
                                <div class="item col">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="https://cdn.pixabay.com/photo/2019/05/04/21/32/food-4179127__340.jpg"
                                                    alt="First slide" width="500" height="260">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://cdn.pixabay.com/photo/2020/06/05/18/37/pie-5264080__340.jpg"
                                                    alt="Second slide" width="500" height="260">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://cdn.pixabay.com/photo/2015/09/16/09/28/pie-942456__340.jpg"
                                                    alt="Third slide" width="500" height="260">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </br></br></br>
                            </br></br></br>
                            <!--  -->
                            <section>
                                <h2 style="text-align:center">Texto de Bienvenida</h2>
                                <div class="row">
                                    <div class=" col-sm-4 ">
                                        <img src="https://media.istockphoto.com/photos/homemade-breaded-wiener-schnitzel-served-with-parsley-and-lemon-picture-id1317641156?b=1&k=20&m=1317641156&s=170667a&w=0&h=33Ce-tOhtV1G4L7Ml1FOGv0kPG3T8Y9GRR8gnftIug4="
                                            width="316" height="190">
                                    </div>
                                    <div class="col-sm-8">
                                        <p style="text-align:justify">
                                            Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la
                                            mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó
                                            humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a
                                            utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada
                                            avergonzante escondido en el medio del texto. Todos los generadores de Lorem
                                            Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos
                                            cuando sea necesario, haciendo a este el único generador verdadero (válido)
                                            en la Internet. Usa un diccionario de mas de 200 palabras provenientes del
                                            latín, combinadas con estructuras muy útiles de sentencias, para generar
                                            texto de Lorem Ipsum que parezca razonable.
                                        </p>

                                        <!-- Button trigger modal -->
                                        <div style="text-align:center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Ver Más
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Bienvenidos</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                        Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <h2 style="text-align:center">Productos Principales</h2>
                                <div class="row">
                                    <div class="item col">
                                        <img src="https://cdn.pixabay.com/photo/2020/02/11/19/03/meal-4840665__340.jpg"
                                            width="316" height="190">
                                    </div>
                                    <div class="item col">
                                        <img src="https://media.istockphoto.com/photos/feet-picture-id1171946922?b=1&k=20&m=1171946922&s=170667a&w=0&h=mVWtXcgb4zW67z89gHHoodbTSVZsqRTPoYll2uswzL8="
                                            width="316" height="190">
                                    </div>
                                    <div class="item col">
                                        <img src="https://media.istockphoto.com/photos/feet-picture-id1171946922?k=20&m=1171946922&s=612x612&w=0&h=YFem5_iZvZb8e5Yfam5EphNKrnzgaFzFLVqAMsZumfA="
                                            width="316" height="190">
                                    </div>
                                </div>
                                <!--  -->
                                <br><br>
                                <h2 style="text-align:center">Contacto</h2>
                                <div class="row">
                                    <div class="col">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15944.556673360725!2d-76.58348775!3d2.46075465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1636144106911!5m2!1ses!2sco"
                                            width="450" height="300" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                    <div class="col">
                                        <h6 style="text-align:justify">
                                            <br>
                                            <strong>Dirección:</strong> Cra 3 # 28N - 60, Popayán Cauca, Colombia
                                            <br><br>
                                            <strong>Atención:</strong> Lunes- Sábado 8am - 2pm
                                            <br>
                                            Domingos y Festivos - Solo atención telefónica
                                            <br><br>
                                            <strong>teléfono:</strong> 3208532914
                                            <br><br>
                                            <strong>correo:</strong> jaop17@hotmail.com
                                        </h6>
                                    </div>
                                </div>
                                <!--  -->
                        </div>
                    </section>
                </div>
            </section>
            <!-- Pie de pagina -->
            <footer class="col-lg-12 bg-info h-25" style="text-align:center">
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