@extends('master')

@section('main')
  <div class="fondo paral">
  <nav class="container navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand a-blanco" href="/home"><h1>Booky</h1> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link a-blanco" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link a-blanco" href="#">FAQ</a>
        </li>
      </ul>

    </div>
  </nav>
<div class="fondoProfile">
  <div class="container header-profile">
  <div class="row profileImage jumbotron">
  <div class="col-sm-6">
    <div class="circle">
      <img src="/images/fotoPerfil.jpg" alt="">
    </div>
      <button type="button" class="btn btn-success agregImage"><i class="fas fa-pen-square"></i></button>
  </div>
  <div class="col-sm-6 profile-info">
    <div class="user-info">
    <div class="row">
      <h4 class="col-sm-7 user-data">{{ Auth::user()->name }}</h4>
      <button class="col-sm-5 btn btn-link edit text-left " type="submit" name="button">Editar perfil</button>
    </div>
     <div class="row user-data user-follow">
      <h4 class="col-sm-5"> 0 seguidores</h4>
      <h4 class="col-sm-5 ">0 seguidos</h4>
    </div>
      </div>
    <div class="row user-data book-button">
    <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="/agregarLibros">Cargar libro</a></button>
    {{-- <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="#">Pedir libro</a></button> --}}
   </div>
  </div>
  </div>
    {{-- <div class="container profile"> --}}
      <div class="container profile">
      <div class="row py-2">
        <div class=""> {{--"col-lg-4 col-md-4 col-sm-12 d-sm-block paso">--}}
      {{-- <h1 class="text-center">Mis reseñas</h1>
      <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Una reseña</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-link">Me gusta</button>
        </div>
      </div>
      </div> --}}
      <div class="">
        <div class="librosInfo row">
          <div class="librosAPrestar col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros para prestar</h1>

          {{-- @foreach (Auth::user() as $book)
            <div class="card">
              @if ($book->image != null)
              <img class="card-img-top" src="{{$book->image}}" alt="Imagen">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{$book->title->name}}</h5>
                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                {{-- <a href="#" class="btn btn-primary">Ver detalle</a>
              </div>
            </div>
          @endforeach --}}

            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
          <div class="librosLeyendo col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Son de mi interés</h1>
            <div class="book-image col-md-6 col-lg-3 rounded mx-auto d-block">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
          <div class="librosPrestados col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros prestados</h1>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
            </div>
            <div class="book-image col-md-6 col-lg-3">
              <img class="rounded mx-auto d-block" src="/images/garcia-marquez.jpg" alt="">
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
