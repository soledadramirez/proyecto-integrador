@extends('master')
@section('custom-style')
<link rel="stylesheet" href="/css/agregarLibros.css">
@endsection

@section('main')


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1>Booky</h1> </a>
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

<div class="container1" style="background-image: url('images/bg-01.jpg');">
  <div class="container2">
    <div class="wrap-container">
      <div class="container-image">
        <div class="container-image-in">
        <img src="images/garcia-marquez.jpg" alt="IMG">
        </div>

      </div>


      <div class="container-form">

        <span class="form-title">
          Datos del libro
        </span>

        <div class="wrap-input">
         <span>Titulo: {{$book->title->name}} </span>

        </div>

        <div class="wrap-input">
          <span>Autor:</span>
        </div>

        <div class="wrap-input">
          <span>Fecha de publicación:</span>
        </div>

        <div class="wrap-input">
          <span>Edición:</span>
        </div>

        <div class="wrap-input">
          <span>Publicado por:</span>
        </div>

        <div class="wrap-input">

          <span>Disponible para: </span>


        </div>

        <div class="wrap-input validate-input">
        <span>Reseñas: </span>
        </div>


      </div>

    </div>
  </div>
</div>



@endsection
