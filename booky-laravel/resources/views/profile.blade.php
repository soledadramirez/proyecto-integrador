@extends('master')

@section('main')
  <div class="fondo paral">
  <nav class="container navbar navbar-expand-lg navbar-light bg-light">
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
        <li class="nav-item">
          <a class="nav-link" href="/register"><span class="fas fa-user"></span> Sign Up</a>
        </li>
        <?php if (isset($_SESSION["email"])): ?>
        <li class="nav-item">
          <a class="nav-link" href="/logout"><span class="fas fa-sign-in-alt"></span> Logout</a>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="/login"><span class="fas fa-sign-in-alt"></span> Login</a>
        <?php endif ?>
        </li>
      </ul>
    </div>
  </nav>
<div class="fondoProfile">
  <div class="container header-profile">
  <div class="row profileImage jumbotron">
  <div class="col-sm-7">
    <div class="circle">
      <img src="/images/fotoPerfil.jpg" alt="">
    </div>
      <button type="button" class="btn btn-secondary agregImage">Agregar imagen</button>
  </div>
  <div class="col-sm-5">

  </div>

  </div>
  </div>
    {{-- <div class="container profile"> --}}
      <div class="container profile">
      <div class="row">
        <div class="reviews col-lg-4 col-md-6 col-sm-12"> {{--"col-lg-4 col-md-4 col-sm-12 d-sm-block paso">--}}
      <h1>Mis reseñas</h1>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Una reseña</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-link">Me gusta</button>
        </div>
      </div>
      </div>
      <div class="col-lg-8 col-md-6">
        <div class="librosInfo row">
          <div class="librosAPrestar">
            <h1>Libros para prestar</h1>
            <div class="col-lg-4 col-md-3">
              <img class="" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
          <div class="librosLeyendo">
            <h1>Libros que pedí o estoy leyendo</h1>
            <div class="col-lg-4 col-md-3 col-sm-12">
              <img class="" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
          <div class="librosPrestados">
            <h1>Libros prestados</h1>
            <div class="col-lg-4 col-md-3 col-sm-12">
            <img class="" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>



        </div>

  </div>

  </div>
  </div>
</div>
</div>
@endsection
