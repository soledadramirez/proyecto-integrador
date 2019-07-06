

@extends('master')
@section('main')

<div class="fondo paral">




  <h2 style="color:#fff">Busca tu libro</h2>
      <form class="form-group row" id="search" action="/buscarLibros" method="get">
        <select class="custom-select col-md-8" name="busqueda">
            <option selected>Buscar por...</option>
            <option value="1">Título</option>
            <option value="2">Autor</option>
          </select>
        <input class="form-control col-md-8" name="search" type="text">

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


<div class="destacado">
  <h2>Libros destacados</h2>
</div>

<div id="carouselExampleControls" class="carousel slide libros-carrusel" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="row libros-carouseles">
      <div class="col-2 libros-carouseles"><a href="#"> <img src="images/libros/adorno.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles "> <a href="#"> <img src="images/libros/bartok.png" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images//libros/benjamin.png" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/chomsky.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/fundacion.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/doerr.jpg" class="d-block w-100" alt="..."> </a> </div>

</div>
  </div>
  <div class="carousel-item">
    <div class="row">
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/benjamin2.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles "> <a href="#"> <img src="images/libros/benjamin3.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/hemingway.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/herzog.jpeg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/homo.jpg" class="d-block w-100" alt="..."> </a> </div>
      <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/lolita.jpeg" class="d-block w-100" alt="..."> </a> </div>
      </div>
  </div>



</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>


  </div>


  <div class="container">


  <div class="destacado">
    <h2>Autores Latinoamericanos</h2>
  </div>

  <div id="carouselExampleControls2" class="carousel slide libros-carrusel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row libros-carouseles">
        <div class="col-2 libros-carouseles"><a href="#"> <img src="images/libros/garcia-marquez.jpg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles "> <a href="#"> <img src="images/libros/bogado.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/borges.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/ciempies.jpg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/detectives.jpg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/jazmin-paraguayo.jpeg" class="d-block w-100" alt="..."> </a> </div>

  </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/levrero2.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles "> <a href="#"> <img src="images/libros/levrero3.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/pichiciegos.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/punk.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/sklar.jpg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="images/libros/putas-asesinas.jpeg" class="d-block w-100" alt="..."> </a> </div>
        </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>


    </div>
  <!-- <div class="container">


  <div class="destacado">
    <h2>Nuevas Publicaciones </h2>
  </div>

  <div id="carouselExampleControls" class="carousel slide libros-carrusel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row libros-carouseles">
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/chomsky.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/benjamin2.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/benjamin3.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/fundacion.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/hemingway.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/lolita.jpeg" class="d-block w-100" alt="..."> </a> </div>

  </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/adorno.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/bartok.png" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles">  <a href="#"><img src="img/libros/bogado.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/rosen.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/revolucion.jpeg" class="d-block w-100" alt="..."> </a> </div>
        <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/homo.jpg" class="d-block w-100" alt="...">  </a> </div>
        </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>


    </div> -->

    <!-- <div class="container">


    <div class="destacado">
      <h2>Autores Latinoamericanos</h2>
    </div>

    <div id="carouselExampleControls" class="carousel slide libros-carrusel" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row libros-carouseles">
          <div class="col-2 libros-carouseles"><a href="#"> <img src="img/libros/ciempies.jpg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/jazmin-paraguayo.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/pichiciegos.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/putas-asesinas.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/sklar.jpg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/gelman.gif" class="d-block w-100" alt="...">  </a> </div>

  </div>

      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/levrero2.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/levrero3.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/punk.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles">  <a href="#"><img src="img/libros/borges.jpeg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/grabois.jpg" class="d-block w-100" alt="..."> </a> </div>
          <div class="col-2 libros-carouseles"> <a href="#"> <img src="img/libros/diego.jpg" class="d-block w-100" alt="..."> </a> </div>
          </div>
      </div>



    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


      </div> -->



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


  <div class="conocenos row">
    <div class="text-conocenos col-xl-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Conocenos</h1>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  <div class="img-conocenos col-xl-6">
      <div class="card">
        <div class="card-body">
          <img src="images/libros-y-risas2.jpg" alt="">
        </div>
      </div>
  </div>
  </div>
  <footer class="col-lg-12 footer-home">
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


  @endsection
