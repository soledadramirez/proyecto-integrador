@extends('master')

@section('main')
  <div class="fondo paral">
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

    </div>
     <div class="row user-data user-follow">
      <h4 class="col-sm-5"> 0 seguidores</h4>
      <h4 class="col-sm-5 ">0 seguidos  </h4>
    </div>
      </div>
    <div class="row user-data book-button">
    <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="/agregarLibros">Cargar libro</a></button>
    {{-- <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="#">Pedir libro</a></button> --}}
    <button class="col-sm-5 btn btn-link edit text-left " type="submit" name="button">Editar perfil</button>
   </div>
  </div>
  </div>
    {{-- <div class="container profile"> --}}
      <div class="container profile">
      <div class="row py-2">
      <div class="">
        <div class="librosInfo row">
          <div class="librosAPrestar col-12 row w-100 mx-auto">

            <h1 class="text-center col-sm-12">Libros para prestar</h1>

            @forelse ($myBooks as $book)
              <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
              <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
              <div class="card-body">
                <h5 class="card-title">{{$book->title->name}}</h5>
                <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
              </div>
            </div>
                {{-- <div class="book-image col-md-6 col-lg-3">
                  <a href="/bookPost/{{$book->id}}">
                   <img class="rounded mx-auto d-block" src="/storage/{{$book->image}}" alt="">
                  </a>
                </div> --}}
            @empty
              <p>Por el momento no hay libros cargados</p>
            @endforelse

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
