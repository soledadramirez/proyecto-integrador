<?php
require_once "funciones.php";

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title></title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/logo-verde-g.png" width="120" height="60" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
          </ul>
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register.php"><span class="fas fa-user"></span> Sign Up</a>
            </li>
            <?php if (isset($_SESSION["email"])): ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Logout</a>
              <?php else: ?>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
            <?php endif ?>
            </li>
          </ul>
        </div>
      </nav>
      <div class="fondo paral">
        <div class="bienvenido">
          <?php if (isset($_SESSION["email"])): ?>
            <h2>Bienvenido <?= $_SESSION["email"]?>!</h2>
           <?php else: ?>
            <h2> Bienvenido</h2>
          <?php endif ?>
        </div>
            <form class="form-group row" id="search" action="index.html" method="post">
              <input class="form-control col-xl-5" type="text" placeholder="Busca tu libro">
              <span><button type="submit" class="btn btn-success btn-lg">Buscar</button></span>
            </form>
      <div class="jumbotron jumbotron-fluid col-xl-9">
          <h1 class="display-4">Somos una comunidad lectora</h1>
          <p class="lead">¿Tenés libros que amaste leer apilados en tu casa? En Booky creemos que ese libro quiere ser compartido con muchas personas más. Dejalo ir y que se sume a nuestra comunidad de libros viajeros!</p>
      </div>
      <div class="container">
      <div class="row pasos">
        <div class="col-lg-4 col-md-4 col-sm-12 d-sm-block paso">
          <h3 class="pasos">Paso 1</h3>
          <p class="text-center">¿Qué libros querés compartir? Agregalos en tu perfil</p>
          <hr>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 d-sm-block paso">
          <h3 class="pasos">Paso 2</h3>
          <p class="text-center">Recibí pedidos de lectores de la comunidad, compartilos y sumá puntos!</p>
          <hr>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 d-sm-block paso">
          <h3 class="pasos">Paso 3</h3>
          <p class="text-center">Buscá los libros que vos querés leer, pedilos y hacé nuevos amigos!</p>
        </div>
      </div>
      </div>
      </div>
      <div class="container">
      <div class="jumbotron jumbotron-fluid destacado">
        <h2>Libros destacados</h2>
      </div>

      <div class="row libros">
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/1984.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/catcher.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/detectives.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/doerr.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/garcia-marquez.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/markson.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/moby.jpg" alt="">
          </div>
          <div class="libros col-lg-3 col-md-4 col-sm-6 d-sm-block">
            <img class="img-fluid" src="img/libros/roth.jpg" alt="">
          </div>
        </div>
        </div>

      <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                 <p>"Que otros se enorgullezcan por lo que han escrito, yo me enorgullezco por lo que he leído"<br> Jorge Luis Borges</p>
            </div>
            <div class="carousel-item text-center p-4">
                <p>"Un libro debe ser el hacha que rompa el mar helado que hay dentro de nosotros" <br>Franz Kafka</p>
            </div>
            <div class="carousel-item text-center p-4">
                <p>"El que lee mucho y anda mucho, ve mucho y sabe mucho" <br>Miguel de Cervantes Saavedra</p>
            </div>
        </div>
          <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="conocenos">
          <div class="text-conocenos">
            <h1>Conocenos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="img-conocenos">
          <img src="img/libros-y-risas2.jpg" alt="">
          </div>
        </div>

        <footer class="col-lg-12">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
          </ul>



        </footer>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
