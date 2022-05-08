<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="app.js"></script>



    <title>Iglesia Cristiana Misionera Monte Sion</title>


</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,700");

    html,
    body {
        height: 100%;
        width: 100%;
        font-family: "Poppins", sans-serif;
        color: #222;
        font-size: medium;
    }

    .navbar {
        padding: 0.8rem;
    }

    .navbar-nav li {
        padding-right: 20px;
    }

    .nav-link {
        font-size: 1.1em !important;
    }

    .navbar {
        background-color: transparent !important;
    }

    .btn-primary-outline {
        background-color: transparent;
        color: grey;
    }

    p {
        font-size: larger;
    }

    .carousel {
        box-shadow: 0 0 8px 8px #3f3f3f;
    }

    .carousel-inner img {
        width: 100%;
        height: 500px;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-caption h1 {
        font-size: 450%;
        text-transform: uppercase;
        text-shadow: 1px 1px 15px #000;
    }

    .carousel-caption h3 {
        font-size: 200%;
        font-weight: 500;
        text-shadow: 1px 1px 10px #000;
        padding-bottom: 1rem;
    }

    .btn-primary {
        background-color: #6648b1;
        border: 1px solid #6648b1;
    }

    .btn-primary:hover {
        background-color: #563d7c;
        border: 1px solid #563d7c;
    }

    .jumbotron {
        padding: 1rem;
        border-radius: 0;
    }

    .padding {
        padding-bottom: 2rem;
    }

    .welcome {
        width: 75%;
        margin: 0 auto;
        padding-top: 2rem;
    }

    .welcomeContact {
        width: 75%;
        margin: 0 auto;
        padding-top: 6rem;
    }

    .welcome hr {
        border-top: 2px solid gold;
        width: 95%;
        margin-top: 0.3rem;
        margin-bottom: 1rem;
    }

    .card-img-top {
        width: 100%;
        height: 45vw;
        object-fit: cover;
        box-shadow: 0 0 8px 8px #3f3f3f;
    }

    .card {
        margin: 0.5%;
        display: inline-block;
    }

    .social a {
        font-size: 4.5em;
        padding: 3rem;
    }

    .fa-facebook {
        color: #3b5998;
    }

    footer {
        background-color: #3f3f3f;
        color: #d5d5d5;
        padding-top: 2rem;
    }

    hr.light {
        border-top: 1px solid gold;
        width: 75%;
        margin-top: 0.8rem;
        margin-bottom: 1rem;
    }

    footer a {
        color: #d5d5d5;
    }

    hr.light-100 {
        border-top: 1px solid gold;
        width: 100%;
        margin-top: 0.8rem;
        margin-bottom: 1rem;
    }

    hr {
        border-top: 1px solid gold;
        width: 100%;
        margin-top: 0.8rem;
        margin-bottom: 1rem;
    }

    .img-fluid {
        box-shadow: 0 0 2px 2px #3f3f3f;
    }

    #img {
        box-shadow: 0 0 8px 8px #3f3f3f;
    }

    #img2 {
        box-shadow: 0 0 8px 8px #3f3f3f;
    }

    .display-4 {
        text-shadow: 4px 4px gold;
    }

    @media (max-width: 992px) {
        .social a {
            font-size: 4em;
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        .carousel-caption {
            top: 43%;
        }

        .carousel-caption h1 {
            font-size: 300%;
        }

        .carousel-caption h3 {
            font-size: 140%;
            font-weight: 4000;
            padding-bottom: 0.2rem;
        }

        .carousel-caption .btn {
            font-size: 95%;
            padding: 8px 14px;
        }

        .display-4 {
            font-size: 200%;
            text-shadow: 0 0 1.25px 1.25px #3f3f3f;
        }

        .card-img-top {
            width: 100%;
            height: 125vw;
            object-fit: cover;
        }

        .social a {
            font-size: 2.5em;
            padding: 1.2rem;
        }
    }

    @media (max-width: 576px) {
        .carousel-caption {
            top: 40%;
        }

        .carousel-caption h1 {
            font-size: 250%;
        }

        .carousel-caption h3 {
            font-size: 110%;
        }

        .carousel-caption .btn {
            font-size: 90%;
            padding: 4px 8px;
        }

        .carousel-indicators {
            display: none;
        }

        .display-4 {
            font-size: 200%;
            text-shadow: 1.25px 1.25px #3f3f3f;
        }

        .card-img-top {
            width: 100%;
            height: 125vw;
            object-fit: cover;
        }

        .social a {
            font-size: 2em;
            padding: 0.7rem;
        }
    }

    /*---Firefox Bug Fix --*/
    .carousel-item {
        transition: -webkit-transform 0.5s ease;
        transition: transform 0.5s ease;
        transition: transform 0.5s ease, -webkit-transform 0.5s ease;
        -webkit-backface-visibility: visible;
        backface-visibility: visible;
    }

    /*---Fixed background image --*/
    figure {
        position: relative;
        width: 100%;
        height: 60%;
        margin: 0 !important;
        text-shadow: 2px 2px black;

    }

    .fixed-wrap {
        clip: rect(0, auto, auto, 0);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #fixed {
        position: fixed;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        will-change: transform;
    }

    /*--- Boostrap Padding Fix --*/
    [class*="col-"] {
        padding: 1rem;
    }
</style>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="x"><img src=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <a class="nav-link" href="#contacto">Contacto</a>
                </li>

            </ul>

</nav>

<body>




    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Iglesia Cristiana Misionera<br>
                    Monte Sion
                </h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead"><b>Pero los que confían en el Señor
                        renovarán sus fuerzas; volarán como las águilas:<br>
                        correrán y no se fatigarán, caminarán y no se cansarán.</b>
                    <br>
                <h2 class="display-4">Isaías 40:31</h2>
                </p>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/carousel.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Juan 3:16</h1>
                    <h3>Dios amo tanto al mundo, que dio a su unico hijo para que todo el que cree en el no se pierda, si no que tenga vida eterna.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carousel.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">1 Corintios 16:14</h1>
                    <h3>Hagan todo con amor.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carousel.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Salmo 56:3</h1>
                    <h3>Cuando siento miedo, pongo en ti mi confianza</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">


    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <p>Muchas personas piensan que necesitan tener las cosas en orden antes de poder ser parte de una iglesia.
                    Si usted piensa de esta forma, nos encantaría ser el lugar donde finalmente pueda dejar de lado esa idea.
                    La verdad es que todos somos un poco desordenados, incluso los cristianos.
                </p>
                <p> Aquí está el otro lado de esa verdad: todos somos dignos de amor,
                    gracia Y una segunda oportunidad (o todas las oportunidades necesarias).
                    Sobre todo, !odos somos dignos de la redención!

                    Así que eres bienvenido aquí, tal como eres. Desorden y todo.
                </p>
                <p>
                    ¡Cuando eres tu propio enemigo! ¡Tienes que detener los comportamientos contraproducentes para avanzar verdaderamente hacia los planes de Dios para tu vida!
                    Entre todos aprenderemos a salir de nuestro propio camino, a vernos como Dios nos ve y mucho más!!
                </p>
            </div>
            <div class="col-lg-6">
                <img src="images/inicio.jpeg" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>


    <!--- Nosotros -->
    <!--- Welcome Section -->

    <!--- Fixed background -->
    <figure>
        <div class="fixed-wrap">
            <div id="fixed">
                <h1 class="display-4 text-center"><a id="nosotros">Nosotros</a></h1>
            </div>
        </div>
    </figure>
    <hr class="my-4">
    <div class="container-fluid padding">
        <div class="row welcome text-center">

            <div class="col-12">
                <p class="lead">Creemos que la vida es mejor cuando la hacemos con otras personas.
                    Para fortalecernos unos a los otros, tenemos ministerios para adultos de todas las edades y etapas de la vida.</p>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2 class="display-4">Misión</h2>
                <p>
                    A través del Evangelio de nuestro Señor Jesucristo rescatar nuevas vidas para Cristo. Siendo una congregación capacitada para alcanzar,
                    preparar y discipular. Educando también a los creyentes integrándolos a la vida cristiana, para que puedan obtener una salvación eterna.
                </p>
                <h2 class="display-4">Visión</h2>
                <p>Ser una congregación misionera dirigida por el Espíritu Santo, su palabra, para poder honrar a Dios con cristianos íntegros,
                    comprometidos con la obra, el reino de los cielos y su comunidad.
                </p>
                <h2 class="display-4">Propósito</h2>
                <p>Mantener y enseñar la doctrina bíblica para estar en comunión los unos con los otros.
                    ¡Unidos en oración!
                    ¡Extendiendo el reino de Dios en la tierra mediante la gran comisión hasta que Cristo regrese otra vez!
                </p>
                <br>
                <a href="contacto.php" onclick="myFunction()" class="btn btn-outline-secondary">Contactar</a>
            </div>
            <div class="col-lg-6">

                <div id="slides" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#slides" data-slide-to="0" class="active"></li>
                        <li data-target="#slides" data-slide-to="1"></li>
                        <li data-target="#slides" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/actividades/actividades (1).jpeg">
                            <div class="carousel-caption">
                                <h1 class="display-2"></h1>
                                <h3></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/actividades/actividades (4).jpeg">
                            <div class="carousel-caption">
                                <h1 class="display-2"></h1>
                                <h3></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/actividades/actividades (8).jpeg">
                            <div class="carousel-caption">
                                <h1 class="display-2"></h1>
                                <h3></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>



    <!--- Meet the team -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">NUESTRA FAMILIA</h1>
            </div>
            <hr>
        </div>
    </div>

    <!--- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/Rolando1.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Pastor</h4>
                        <p class="card-text">Rolando Rodriguez</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/maria.jpg">
                    <div class="card-body">
                        <h4 class="card-tittle">Pastora</h4>
                        <p class="card-text">Maria Astor</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/edgar.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Edgar</h4>
                        <p class="card-text">Lider de evangelismo</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/brenda.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Maestra de escuela biblica</h4>
                        <p class="card-text">Brenda Millan</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/nilda.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Lider de adoracion</h4>
                        <p class="card-text">Nilda Rosa</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/zenaida.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Lider de diaconos</h4>
                        <p class="card-text">Zenaida Rivera</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/talisha.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Lider de comunicaciones</h4>
                        <p class="card-text">Talisha Laboy</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/jose.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Maestro de Escuela biblica de aduldos</h4>
                        <p class="card-text">Jose de Jesus</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/francisco.jpeg">
                    <div class="card-body">
                        <h4 class="card-tittle">Miembro del grupo de diaconos</h4>
                        <p class="card-text">Francisco Rivera</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Grupo de adoracion Nimra</h1>
            </div>
            <div class="col-12">
                <img src="images/Rolando2.jpeg" class="img-fluid">
            </div>

        </div>
    </div>
    <hr>
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Actividades</h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-5 ">
                <img src="images/actividades/actividades (2).jpeg" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <img src="images/actividades/actividades (5).jpeg" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>

    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-5 ">
                <img src="images/actividades/actividades (6).jpeg" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <img src="images/actividades/actividades (7).jpeg" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!--- Servicios-->
    <figure>
        <div class="fixed-wrap">
            <div id="fixed">
                <h1 class="display-4 text-center"><a id="servicios">Servicios</a>
            </div>
        </div>
    </figure>

    <hr class="my-4">

    <!--- Three columns-->

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2 class="display-4">Martes 7:00 PM</h2>
                <p>Cultos de oracion y estudio biblicos</p>

                <br>

            </div>
            <div class="col-lg-6">
                <img src="images/twocolumns.jpg" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <img src="images/twocolumns.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4">Jueves 7:00PM</h2>
                <p>
                <dl>
                    <dt>Cultos de sociedades</dt>

                    <dd>Jovenes</dd>
                    <dd>Damas</dd>
                    <dd>Caballeros</dd>
                    <dd>Misioneros </dd>
                    <dd>Niños</dd>
                </dl>
                </p>
                <br>

            </div>

        </div>
        <hr class="my-4">
    </div>

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2 class="display-4">Domingos 10:00AM</h2>
                <p>Cultos regulares</p>

                <br>

            </div>
            <div class="col-lg-6">
                <img src="images/twocolumns.jpg" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>


    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <p>
                <h1 class="display-4">Evangelizacion</p>

                </h1>
                </P>
            </div>

        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 text-left">
                <button class='btn btn-outline-info' onclick="imgBackward('evangelizacion',29,30)">Atras</button>
                <img src="images/evangelizacion/1.jpeg" id="evangelizacion" class="img-fluid">

            </div>
            <div class="col-lg-6 text-right">
                <button class='btn btn-outline-info' onclick="imgFoward('evangelizacion',29,30)">Adelante</button>
                <img src="images/evangelizacion/2.jpeg" id="evangelizacion2" class="img-fluid">

            </div>

        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <p>
                <h1 class="display-4">Dia de las Madres</p>

                </h1>
                </P>
            </div>

        </div>
    </div>
    <hr>
    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 text-left">
                <button class='btn btn-outline-info' onclick="imgBackward('madres',9,10,)">Atras</button>
                <img src="images/madres/1.jpeg" id="madres" class="img-fluid">

            </div>
            <div class="col-lg-6 text-right">
                <button class='btn btn-outline-info' onclick="imgFoward('madres',9,10)">Adelante</button>
                <img src="images/madres/2.jpeg" id="madres2" class="img-fluid">

            </div>

        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Culto para niños</h1>
            </div>
            <div class="col-12">
                <p class="lead">Sin importar la edad, empoderamos a nuestros niños para que crezcan en su fe y experimenten y entiendan el amor,
                    la gracia y la verdad de Dios.</p>
                <p>
                    ¡Enseñamos a los niños en su nivel de desarrollo para que podamos asegurarnos de que aprendan más sobre un Dios que los ama!
                    Brindamos recursos para que los padres/tutores discipulen mejor a sus hijos porque creemos que los padres/tutores son las personas
                    más importantes en el crecimiento espiritual de los niños.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 text-left">
                <button class='btn btn-outline-info' onclick="imgBackward('ninos',7,8)">Atras</button>
                <img src="images/ninos/1.jpeg" id="ninos" class="img-fluid">

            </div>
            <div class="col-lg-6 text-right">
                <button class='btn btn-outline-info' onclick="imgFoward('ninos',7,8)">Adelante</button>
                <img src="images/ninos/2.jpeg" id="ninos2" class="img-fluid">

            </div>

        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Semana Santa</h1>
            </div>

        </div>
    </div>
    <hr>
    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 text-left">
                <button class='btn btn-outline-info' onclick="imgBackward('semanaSanta',21,22)">Atras</button>
                <img src="images/semanaSanta/1.jpeg" id="semanaSanta" class="img-fluid">

            </div>
            <div class="col-lg-6 text-right">
                <button class='btn btn-outline-info' onclick="imgFoward('semanaSanta',21,22)">Adelante</button>
                <img src="images/semanaSanta/2.jpeg" id="semanaSanta2" class="img-fluid">

            </div>

        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <p>
                <h1 class="display-4">Actividad y cena para los deambulantes.<br>
                    Centro posada San Felipe Arecibo.
                </h1>

            </div>

        </div>
    </div>
    <hr>
    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 text-left">
                <button class='btn btn-outline-info' onclick="imgBackward('deambulantes',9,10)">Atras</button>
                <img src="images/deambulantes/1.jpeg" id="deambulantes" class="img-fluid">

            </div>
            <div class="col-lg-6 text-right">
                <button class='btn btn-outline-info' onclick="imgFoward('deambulantes',9,10)">Adelante</button>
                <img src="images/deambulantes/2.jpeg" id="deambulantes2" class="img-fluid">

            </div>

        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <p>
                <h1 class="display-4">Culto de caballeros</p>

                </h1>
                </P>
            </div>

        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 text-left">
                <button class='btn btn-outline-info' onclick="imgBackward('caballeros',13,14)">Atras</button>
                <img src="images/caballeros/1.jpeg" id="caballeros" class="img-fluid">

            </div>
            <div class="col-lg-6 text-right">
                <button class='btn btn-outline-info' onclick="imgFoward('caballeros',13,14)">Adelante</button>
                <img src="images/caballeros/2.jpeg" id="caballeros2" class="img-fluid">

            </div>

        </div>
    </div>


    <!--- Contacto-->

    <figure>
        <div class="fixed-wrap">
            <div id="fixed">
                <h1 class="display-4 text-center"><a id="contacto">Contacto</a>
            </div>
        </div>
    </figure>

    <hr class="my-4">

    <div class="row welcomeContact text-center">
        <!--Section heading-->

        <hr>
        <div class="col-12">
            <p class="lead">Ad reprehenderit enim sit incididunt exercitation voluptate do aliquip exercitation voluptate. Labore voluptate consequat non tempor reprehenderit sunt cillum aliquip culpa ad incididunt dolor ea velit. Velit officia officia ea do ullamco. Mollit elit amet ipsum Lorem irure sunt ad voluptate aliqua non cillum est elit.

                Irure id ut reprehenderit esse amet ex duis exercitation minim minim qui. Dolore et labore minim aute. Nostrud nisi incididunt ea reprehenderit consequat irure sunt consectetur cillum magna aliquip eu aute. Anim veniam enim amet minim tempor ea occaecat duis ut Lorem tempor ut mollit.

                Ipsum pariatur cillum eu laboris dolore in excepteur incididunt. Proident nisi veniam laboris officia commodo eiusmod excepteur. Enim quis laborum quis fugiat ullamco est Lorem. Est enim reprehenderit pariatur fugiat elit aute duis mollit fugiat est tempor.
            </p>
        </div>
    </div>
    <hr class="my-4">

    <div class="container-fluid padding">

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.384919757503!2d-66.88904928478905!3d18.466215787440724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c02e931ac3de55f%3A0x2b2f1ca229bff766!2sIglesia%20Cristiana%20Misionera%20Monte%20Sion!5e0!3m2!1ses-419!2spr!4v1649870226426!5m2!1ses-419!2spr" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Carre 2 Camuy, Puerto Rico</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>(787) 414-8996</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>Rolandorodri1976@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </div>








        <script>
            const toTop = () =>
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            let foto = 1;
            let foto2 = 2;

            function imgFoward(album, cantidad, total) {
                if (foto < cantidad) {
                    foto += 2;
                    foto2 += 2;

                    img1 = document.getElementById(album).src =
                        "http://localhost/Prueba/images/" + album + "/" + foto + ".jpeg";

                    img2 = document.getElementById(album + "2").src =
                        "http://localhost/Prueba/images/" + album + "/" + foto2 + ".jpeg";

                    console.log(foto);
                    console.log(foto2);
                } else {
                    foto = 1;
                    foto2 = 2;
                    img1 = document.getElementById(album).src =
                        "http://localhost/Prueba/images/" + album + "/" + foto + ".jpeg";

                    img2 = document.getElementById(album + "2").src =
                        "http://localhost/Prueba/images/" + album + "/" + foto2 + ".jpeg";
                    console.log("we done");
                }
            }

            function imgBackward(album, cantidad, total) {
                if (foto <= 1) {
                    foto = cantidad;
                    foto2 = total;

                    img1 = document.getElementById(album).src =
                        "http://localhost/Prueba/images/" + album + "/" + foto + ".jpeg";

                    img2 = document.getElementById(album + "2").src =
                        "http://localhost/Prueba/images/" + album + "/" + foto2 + ".jpeg";

                    console.log(foto);
                    console.log(foto2);
                } else {
                    foto -= 2;
                    foto2 -= 2;
                    img1 = document.getElementById(album).src =
                        "http://localhost/Prueba/images/" + album + "/" + foto + ".jpeg";

                    img2 = document.getElementById(album + "2").src =
                        "http://localhost/Prueba/images/" + album + "/" + foto2 + ".jpeg";
                    console.log("we done");
                }
            }
        </script>




    <!--- Footer --->
    <footer>

        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="https://i0.wp.com/movicm.org/wp-content/uploads/elementor/thumbs/Asset-15-8-pjzk8ftbsmsp142mir4abu8ic8ec4sgfjuj2nii7l4.png?w=1200&ssl=1">
                    <hr class="light">
                    <p>787-414-8996</p>
                    <p>Rolandorodri1976@gmail.com</p>
                    <p>Carr 2 Puerto Rico</p>
                    <p>Camuy, PR 00627</p>
                </div>
                <div class="col-md-6">
                    <a href="https://www.facebook.com/Iglesia-Cristiana-Misionera-Monte-Sion-Camuy-1896832357220376">
                        <h2>Visitanos</h2>
                        *
                        <h4>Horarios regulares

                        </h4>
                    </a>
                    <hr class="light">
                    <p>Martes y Jueves: </p>
                    <p>Domingo:</p>
                </div>
                <div class="col-12">
                    <h5>&copy; Iglesia de Rolando</h5>
                </div>
            </div>
        </div>
        <script src="app.js"></script>
        <button onclick="toTop()" class="btn">^</button>
    </footer>

</body>

</html>
