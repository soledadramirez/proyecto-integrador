@extends('master')
@section('main')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><!--<img src="img/logo-verde-g.png" width="120" height="60" alt="">--><h1>Booky</h1> </a>
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
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Logout
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Mi perfil</a>
            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
        </div>
      </div>
    </ul>
      </div>
    </nav>
  <div class="container">
    <div class="fondo paral">
    <div class="bienvenido">
        <h3>Hola! Ya es hora de cargar tus libros</h3>
    </div>
    <div class="cargarlibros">
      <form>
      <div class="form-group">
        <label for="exampleFormControlInput1"></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del libro">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput2"></label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del autor">
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Disponible para:</label>
          <select class="form-control" id="exampleFormControlSelect1">
          <option>Elegí una opción</option>
          <option>Prestar</option>
          <option>Regalar</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Contanos por qué este libro es genial</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Subir libro</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="jumbotron jumbotron-fluid destacado">
    <h2>Tus libros</h2>
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
