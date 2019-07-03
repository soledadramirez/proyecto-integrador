@extends('master')

@section('main')

<link rel="stylesheet" type="text/css" href="css/agregarLibros.css">
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

          <form action="/agregarLibros" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <img src="images/agregarPortada.png" alt="IMG">
          </div>
          <div class="container-form-btn">
            <input type="file" onchange="previewFile()"><br>
           <img src="" height="200" alt="Agregar portada">
          </div>

      </div>


      <div class="container-form">

        <span class="form-title">
          Datos del libro
        </span>

        <div class="wrap-input">
          <input class="input100" type="text" name="name" placeholder="Nombre del libro">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fas fa-book"></i>
          </span>
        </div>

        <div class="wrap-input">
          <input class="input100" type="text" name="author" placeholder="Nombre del autor">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fas fa-feather"></i>
          </span>
        </div>

        <div class="wrap-input">

          <select name="book_action" class="form-control select100" id="exampleFormControlSelect1">
          <option>Disponible para:</option>
          @foreach ($states as $state)
            <option value="{{$state->id}}">{{$state->name}}</option>
          @endforeach
          </select>
        </div>

        <div class="wrap-input validate-input">
          <textarea class="input100" name="description" placeholder="Agrega una reseña de este libro"></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="container-form-btn">
          <button type="submit" class="form-btn">
            Cargar al perfil
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="js/addImg.js">

</script>

@endsection
