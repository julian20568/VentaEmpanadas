<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <nav id="menu" class="col-12 navbar navbar-dark bg-dark p-0 pl-4">
                <!-- Creando la lista del menu -->
                <ul class="row w-50">
                    <li class="col"><a style="color:white" href="index.view.php">Inicio</a></li>
                    <li class="col"><a style="color:white" href="productos.view.php">Productos</a></li>
                    <li class="col"><a style="color:white" href="empresa.view.php">Empresa</a></li>
                    <li class="col"><a style="color:white" href="contacto.view.php">Contacto</a></li>
                </ul>
            </nav>
            <!-- Creando el contenido -->
            <section id="content" class="col-12">
                <div class="row">
                    <section id="products" class="col border">
                        <div class="items">
                            <!--  -->
                            <div class="row">
                                <div class="item col m-2">
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
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </br></br></br>
                            </br></br></br>
                            <!--  -->
                            <h2 style="text-align:center">Productos Principales</h2>
                            <div class="row">
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2020/02/11/19/03/meal-4840665__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                                <div class="item col m-2">
                                    <img src="https://media.istockphoto.com/photos/feet-picture-id1171946922?b=1&k=20&m=1171946922&s=170667a&w=0&h=mVWtXcgb4zW67z89gHHoodbTSVZsqRTPoYll2uswzL8="
                                        class="rounded-circle" width="215" height="215">
                                </div>
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2020/02/11/19/03/meal-4840667__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                            </div>

                            </br></br></br>
                            <div class="row">
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada Aborrajada</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Con relleno de plátano maduro cocinado, macerado, queso y bocadillo.</p>
                                </div>
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada de Carne</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Con relleno de Queso, Carne y papa pastusa.</p>
                                </div>
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada Hawaiana</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Contiene Queso, piña y jamón.</p>
                                </div>
                            </div>

                            <br><br><br>
                            <div class="row">
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2018/08/15/00/07/fried-food-3606942__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2015/01/08/04/02/empanadas-592358__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2019/12/23/20/05/schnitzel-4715320__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                            </div>

                            </br></br></br>
                            <div class="row">
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada de Lechona</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Contine carne, chicharron, arbeja y arroz.</p>
                                </div>
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada Mixta</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Con relleno de Pollo, Carne y Arroz.</p>
                                </div>
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada de Pollo con Champiñones</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Contiene Queso y Pollo Con Champiñones.</p>
                                </div>
                            </div>

                            <br><br><br>
                            <div class="row">
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2020/04/23/02/27/pasties-5080794__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2016/11/11/17/49/schnitzel-1817337__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                                <div class="item col m-2">
                                    <img src="https://cdn.pixabay.com/photo/2020/06/05/18/37/pie-5264080__340.jpg"
                                        class="rounded-circle" width="215" height="215">
                                </div>
                            </div>

                            </br></br></br>
                            <div class="row">
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada Ranchera</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Contiene Queso y una salchicha ahumada McPollo partida por la mitad.</p>
                                </div>
                                <div class="item col m-2">
                                    <h3><i><strong>Empanada Trifásica</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Contiene relleno de Carne, Pollo y Huevo.</p>
                                </div>
                                <div class="item col m-2">
                                    <h3><i><strong>Cockteleras</strong></i></h3>
                                    <h3><i><strong>
                                                <hr>
                                            </strong></i></h3>
                                    <p>Carne, Mixta, Lechona y Trifasica.</p>
                                </div>
                            </div>
                            <!--  -->
                            <br><br><br>
                        </div>
                        <!--  -->
                </div>
            </section>
        </div>
        </section>
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