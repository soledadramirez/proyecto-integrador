

@extends('master')
@section('main')

<class="fondo paral">
    <form class="form-group row my-0 p-0" id="search" action="/buscarLibros" method="get">
      <div class="col-lg-8">
        <input class="form-control col-md-10 mx-auto mt-3" name="search" type="text" placeholder="Busca tu libro" required>
      </div>
      <div class="btn-group btn-group-toggle col-5 row mx-auto" data-toggle="buttons">
          <label class="btn btn-secondary active my-1">
            <input type="radio" class="col-3 d-block" name="busqueda" id="option1" value="1" autocomplete="off" checked> Por título
          </label>
          <label class="btn btn-secondary my-1">
            <input type="radio" class="col-3 d-block" name="busqueda" id="option2" value="2" autocomplete="off"> Por autor
          </label>
      </div>
      <div class="mx-auto col-12 text-center">
          <span><button type="submit" class="btn btn-success btn-lg">Buscar</button></span>
      </div>
    </form>
<div class="jumbotron jumbotron-fluid col-xl-9 mt-4">
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


  <h2 name="libros-recomendados" id="libros-recomendados">Libros destacados</h2>
</div>

<div id="carouselExampleControls" name="carouselExampleControls" class="carousel slide libros-carrusel" data-ride="carousel">
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

  <div id="carouselExampleControls2" name="carouselExampleControls2" class="carousel slide libros-carrusel" data-ride="carousel">
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
@if (!Auth::user())
  <div class="conocenos row mt-4" id="conocenos" name>
    <div class="text-conocenos col-xl-6">
      <div class="card conocenos">
        <div class="card-body conocenos">
          <h1 class="card-title">Un poco sobre nosotros</h1>
          <p class="card-text conocenos">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  <div class="img-conocenos col-xl-6 conocenos pt-4">
      <div class="card conocenos">
        <div class="card-body conocenos">
          <img src="images/libros-y-risas2.jpg" alt="">
        </div>
      </div>
  </div>
  </div>
@endif

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
  {{-- <footer class="col-lg-12 footer-home">
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



  </footer> --}}


  @endsection
